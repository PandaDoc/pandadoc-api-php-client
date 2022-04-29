<?php

use PandaDoc\Client\Api\DocumentsApi;
use PandaDoc\Client\ApiException;
use PandaDoc\Client\Configuration;
use PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens;
use PandaDoc\Client\Model\DocumentCreateRequest;
use PandaDoc\Client\Model\DocumentCreateRequestContentLibraryItems;
use PandaDoc\Client\Model\DocumentCreateRequestContentPlaceholders;
use PandaDoc\Client\Model\DocumentCreateRequestImages;
use PandaDoc\Client\Model\DocumentCreateRequestRecipients;
use PandaDoc\Client\Model\DocumentCreateResponse;
use PandaDoc\Client\Model\DocumentSendRequest;
use PandaDoc\Client\Model\PricingTableRequest;
use PandaDoc\Client\Model\PricingTableRequestRowOptions;
use PandaDoc\Client\Model\PricingTableRequestRows;
use PandaDoc\Client\Model\PricingTableRequestSections;

require_once(__DIR__ . '/vendor/autoload.php');


class CreateDocumentFromTemplateAndSend
{
    // place your api key here
    const API_KEY = 'YOUR_API_KEY';

    // you should have an `Full API Sample Document from PandaDoc Template`
    // onboarding template in your workspace just place its ID here
    const TEMPLATE_UUID = 'YOUR_TEMPLATE_UUID';

    // you should have a several onboarding CLIs in your workspace
    // just place an ID of any
    const CONTENT_LIBRARY_ITEM_ID = 'YOUR_CONTENT_LIBRARY_ITEM_ID';

    const MAX_CHECK_RETRIES = 5;

    /**
     * @param DocumentsApi $documentApiInstance
     * @return DocumentCreateResponse
     * @throws ApiException
     */
    public static function createDocument(DocumentsApi $documentApiInstance): DocumentCreateResponse
    {
        $pricingTable = new PricingTableRequest();
        $pricingTable->setName('Pricing Table 1')
            ->setDataMerge(true)
            ->setOptions([
                'Discount' => [
                    'type' => 'absolute',
                    'name' => 'Global Discount',
                    'value' => 10
                ],
                'Tax' => [
                    'type' => 'percent',
                    'name' => 'Tax First',
                    'value' => 15
                ]
            ])
            ->setSections([
                (new PricingTableRequestSections())
                    ->setTitle('Sample Section')
                    ->setDefault(true)
                    ->setMultichoiceEnabled(false)
                    ->setRows([
                        (new PricingTableRequestRows())
                            ->setOptions(
                                (new PricingTableRequestRowOptions())
                                    ->setOptional(true)
                                    ->setOptionalSelected(true)
                                    ->setQtyEditable(true)
                            )
                            ->setData([
                                'Name' => 'Toy Panda',
                                'Description' => 'Fluffy',
                                'Price' => 10,
                                'Cost' => 8.5,
                                'QTY' => 3,
                                'SKU' => 'toy_panda',
                                'Discount' => [
                                    'value' => 10,
                                    'type' => 'percent'
                                ],
                                'Tax' => [
                                    'value' => 10,
                                    'type' => 'percent'
                                ]
                            ])
                            ->setCustomFields(null)
                    ])
            ]);

        $documentCreateRequest = new DocumentCreateRequest();
        $documentCreateRequest->setName('API Sample Document from PandaDoc Template')
            ->setTemplateUuid(self::TEMPLATE_UUID)
            ->setRecipients([
                (new DocumentCreateRequestRecipients())
                    ->setEmail('josh@example.com')
                    ->setFirstName('Josh')
                    ->setLastName('Ron')
                    ->setRole('user')
                    ->setSigningOrder(1),
            ])
            ->setTokens([
                (new DocumentCreateByTemplateRequestTokens())
                    ->setName('Favorite.Pet')
                    ->setValue('Panda'),
            ])
            ->setFields([
                'name' => ['value' => 'John'],
            ])
            ->setMetadata([
                'myFavoritePet' => 'Panda',
            ])
            ->setTags(['created_via_api', 'test_document'])
            ->setImages([
                (new DocumentCreateRequestImages())
                    ->setName('Image 1')
                    ->setUrls([
                        'https://s3.amazonaws.com/pd-static-content/public-docs/pandadoc-panda-bear.png',
                    ]),
            ])
            ->setPricingTables([$pricingTable])
            ->setContentPlaceholders([
                (new DocumentCreateRequestContentPlaceholders())
                    ->setBlockId('Content Placeholder 1')
                    ->setContentLibraryItems([
                        (new DocumentCreateRequestContentLibraryItems())
                            ->setId(self::CONTENT_LIBRARY_ITEM_ID)
                            ->setPricingTables([$pricingTable])
                    ])
            ]);

        return $documentApiInstance->createDocument($documentCreateRequest);
    }

    /**
     * Document creation is non-blocking (asynchronous) operation.
     *
     * With a successful request, you receive a response with the created
     * document's ID and status document.uploaded.
     * After processing completes on our servers, usually a few seconds,
     * the document moves to the document.draft status.
     * Please wait for the webhook call or check this document's
     * status before proceeding.
     *
     * The change of status from document.uploaded to another status signifies
     * the document is ready for further processing.
     * Attempting to use a newly created document before PandaDoc servers
     * process it will result in a '404 document not found' response.
     *
     * @param DocumentsApi $documentApiInstance
     * @param DocumentCreateResponse $document
     * @return void
     * @throws ApiException|Exception
     */
    public static function ensureDocumentCreated(DocumentsApi $documentApiInstance, DocumentCreateResponse $document): void
    {
        $currentRetries = 0;

        while ($currentRetries < self::MAX_CHECK_RETRIES) {
            try {
                sleep(2);
            } catch (Exception $e) {
                print_r($e->getMessage() . PHP_EOL);
                throw $e;
            }

            $currentRetries++;
            $docStatusResponse = $documentApiInstance->statusDocument($document->getId());
            if ($docStatusResponse->getStatus() === 'document.draft') {
                return;
            }
        }

        throw new Exception('Document was not sent');
    }

    /**
     * @param DocumentsApi $documentApiInstance
     * @param DocumentCreateResponse $document
     * @return void
     * @throws ApiException
     */
    public static function sendDocument(DocumentsApi $documentApiInstance, DocumentCreateResponse $document): void
    {
        $requestBody = (new DocumentSendRequest())
            ->setSilent(True)
            ->setSubject('This doc was send via php SDK');

        $documentApiInstance->sendDocument($document->getId(), $requestBody);
    }

    public static function run()
    {
        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('Authorization', self::API_KEY)
            ->setApiKeyPrefix('Authorization', 'API-Key');

        $documentApiInstance = new DocumentsApi(null, $config);

        try {
            $document = self::createDocument($documentApiInstance);
            print_r("Document was successfully uploaded: \n" . $document . PHP_EOL);
            self::ensureDocumentCreated($documentApiInstance, $document);
            self::sendDocument($documentApiInstance, $document);
            print_r("Document was successfully created and sent to the recipients!" . PHP_EOL);
        } catch (Exception $e) {
            print_r("Status code: " . $e->getCode() . PHP_EOL);
            print_r("Reason: " . $e->getMessage() . PHP_EOL);
            print_r($e->getTraceAsString() . PHP_EOL);
        }
    }
}


CreateDocumentFromTemplateAndSend::run();
