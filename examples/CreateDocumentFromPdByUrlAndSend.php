<?php

use PandaDoc\Client\Api\DocumentsApi;
use PandaDoc\Client\ApiException;
use PandaDoc\Client\Configuration;
use PandaDoc\Client\Model\DocumentCreateRequest;
use PandaDoc\Client\Model\DocumentCreateRequestRecipients;
use PandaDoc\Client\Model\DocumentCreateResponse;
use PandaDoc\Client\Model\DocumentSendRequest;

require_once(__DIR__ . '/vendor/autoload.php');


class CreateDocumentFromPdByUrlAndSend
{
    // place your api key here
    const API_KEY = 'YOUR_API_KEY';

    // Change PDF url
    const PDF_URL = 'https://cdn2.hubspot.net/hubfs/2127247/public-templates/SamplePandaDocPdf_FieldTags.pdf';

    const MAX_CHECK_RETRIES = 5;

    /**
     * @param DocumentsApi $documentApiInstance
     * @return DocumentCreateResponse
     * @throws ApiException
     */
    public static function createDocument(DocumentsApi $documentApiInstance): DocumentCreateResponse
    {
        $documentCreateRequest = new DocumentCreateRequest();
        $documentCreateRequest
            ->setName('Sample Document from PDF with Field Tags')
            ->setUrl(self::PDF_URL)
            ->setTags(['tag1', 'tag2'])
            ->setRecipients([
                (new DocumentCreateRequestRecipients())
                    ->setEmail('john@example.com')
                    ->setFirstName('John')
                    ->setLastName('Doe')
                    ->setRole('user')
                    ->setSigningOrder(1),
                (new DocumentCreateRequestRecipients())
                    ->setEmail('josh@example.com')
                    ->setFirstName('Josh')
                    ->setLastName('Ron')
                    ->setSigningOrder(2),
            ])
            ->setFields([
                'name' => ['value' => 'John'],
                'like' => ['value' => true],
            ])
            ->setMetadata([
                'salesforce.opportunity_id' => '123456',
                'myFavoritePet' => 'Panda',
            ])
            ->setParseFormFields(false);
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

CreateDocumentFromPdByUrlAndSend::run();
