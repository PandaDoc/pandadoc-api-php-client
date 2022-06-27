# The Official PandaDoc PHP client SDK
PandaDoc SDK spans a broad range of functionality to help you build incredible documents automation experiences inside your product.

## Docs
- [Official public API documentation](https://developers.pandadoc.com/reference/about)

## Requirements
PHP 7.3 and later

## Installation
### Composer

To install the bindings via [Composer](https://getcomposer.org/), use

```composer require pandadoc/php-client```

or add the following to `composer.json`:

```json
{
  "require": {
    "pandadoc/php-client": "5.2.0"
  }
}
```

Then run `composer install`

## Getting Started

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

# Defining the host is optional and defaults to https://api.pandadoc.com
# See Configuration.php for a list of all supported configuration parameters.
$apiKey = 'YOUR_API_KEY';
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()
            ->setApiKey('Authorization', $apiKey)
            ->setApiKeyPrefix('Authorization', 'API-Key');

$apiInstance = new PandaDoc\Client\Api\TemplatesApi(
    // If you want to use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}

```

## Authorization
### apiKey
- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header
### oauth2
- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.pandadoc.com/oauth2/authorize
- **Scopes**: 
 - **read+write**: Use `read+write` to create, send, delete, and download documents, and `read` to view templates and document details.

## Examples
- [Create and send document from a template](https://github.com/PandaDoc/pandadoc-api-php-client/blob/main/examples/CreateDocumentFromTemplateAndSend.php)
- [Create and send document from the pdf url](https://github.com/PandaDoc/pandadoc-api-php-client/blob/main/examples/CreateDocumentFromPdByUrlAndSend.php)

## Docs
### Official PandaDoc public API docs
https://developers.pandadoc.com/reference/about

### Documentation for API Endpoints

All URIs are relative to *https://api.pandadoc.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APILogsApi* | [**detailsLog**](docs/Api/APILogsApi.md#detailslog) | **GET** /public/v1/logs/{id} | Details API Log
*APILogsApi* | [**listLogs**](docs/Api/APILogsApi.md#listlogs) | **GET** /public/v1/logs | List API Log
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /public/v1/contacts | Create contact
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /public/v1/contacts/{id} | Delete contact by id
*ContactsApi* | [**detailsContact**](docs/Api/ContactsApi.md#detailscontact) | **GET** /public/v1/contacts/{id} | Get contact details by id
*ContactsApi* | [**listContacts**](docs/Api/ContactsApi.md#listcontacts) | **GET** /public/v1/contacts | List contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PATCH** /public/v1/contacts/{id} | Update contact by id
*ContentLibraryItemsApi* | [**detailsContentLibraryItem**](docs/Api/ContentLibraryItemsApi.md#detailscontentlibraryitem) | **GET** /public/v1/content-library-items/{id}/details | Details Content Library Item
*ContentLibraryItemsApi* | [**listContentLibraryItems**](docs/Api/ContentLibraryItemsApi.md#listcontentlibraryitems) | **GET** /public/v1/content-library-items | List Content Library Item
*DocumentAttachmentsApi* | [**createDocumentAttachment**](docs/Api/DocumentAttachmentsApi.md#createdocumentattachment) | **POST** /public/v1/documents/{id}/attachments | Document Attachment Create
*DocumentAttachmentsApi* | [**deleteDocumentAttachment**](docs/Api/DocumentAttachmentsApi.md#deletedocumentattachment) | **DELETE** /public/v1/documents/{id}/attachments/{attachment_id} | Document Attachment Delete
*DocumentAttachmentsApi* | [**detailsDocumentAttachment**](docs/Api/DocumentAttachmentsApi.md#detailsdocumentattachment) | **GET** /public/v1/documents/{id}/attachments/{attachment_id} | Document Attachment Details
*DocumentAttachmentsApi* | [**downloadDocumentAttachment**](docs/Api/DocumentAttachmentsApi.md#downloaddocumentattachment) | **GET** /public/v1/documents/{id}/attachments/{attachment_id}/download | Document Attachment Download
*DocumentAttachmentsApi* | [**listDocumentAttachments**](docs/Api/DocumentAttachmentsApi.md#listdocumentattachments) | **GET** /public/v1/documents/{id}/attachments | Document Attachment List
*DocumentsApi* | [**changeDocumentStatus**](docs/Api/DocumentsApi.md#changedocumentstatus) | **PATCH** /public/v1/documents/{id}/status | Document status change
*DocumentsApi* | [**createDocument**](docs/Api/DocumentsApi.md#createdocument) | **POST** /public/v1/documents | Create document
*DocumentsApi* | [**createDocumentLink**](docs/Api/DocumentsApi.md#createdocumentlink) | **POST** /public/v1/documents/{id}/session | Create a Document Link
*DocumentsApi* | [**createLinkedObject**](docs/Api/DocumentsApi.md#createlinkedobject) | **POST** /public/v1/documents/{id}/linked-objects | Create Linked Object
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /public/v1/documents/{id} | Delete document by id
*DocumentsApi* | [**deleteLinkedObject**](docs/Api/DocumentsApi.md#deletelinkedobject) | **DELETE** /public/v1/documents/{id}/linked-objects/{linked_object_id} | Delete Linked Object
*DocumentsApi* | [**detailsDocument**](docs/Api/DocumentsApi.md#detailsdocument) | **GET** /public/v1/documents/{id}/details | Document details
*DocumentsApi* | [**downloadDocument**](docs/Api/DocumentsApi.md#downloaddocument) | **GET** /public/v1/documents/{id}/download | Document download
*DocumentsApi* | [**downloadProtectedDocument**](docs/Api/DocumentsApi.md#downloadprotecteddocument) | **GET** /public/v1/documents/{id}/download-protected | Download document protected
*DocumentsApi* | [**listDocuments**](docs/Api/DocumentsApi.md#listdocuments) | **GET** /public/v1/documents | List documents
*DocumentsApi* | [**listLinkedObjects**](docs/Api/DocumentsApi.md#listlinkedobjects) | **GET** /public/v1/documents/{id}/linked-objects | List Linked Objects
*DocumentsApi* | [**sendDocument**](docs/Api/DocumentsApi.md#senddocument) | **POST** /public/v1/documents/{id}/send | Send Document
*DocumentsApi* | [**statusDocument**](docs/Api/DocumentsApi.md#statusdocument) | **GET** /public/v1/documents/{id} | Document status
*DocumentsApi* | [**transferAllDocumentsOwnership**](docs/Api/DocumentsApi.md#transferalldocumentsownership) | **PATCH** /public/v1/documents/ownership | Transfer all documents ownership
*DocumentsApi* | [**transferDocumentOwnership**](docs/Api/DocumentsApi.md#transferdocumentownership) | **PATCH** /public/v1/documents/{id}/ownership | Update document ownership
*FoldersAPIApi* | [**createDocumentFolder**](docs/Api/FoldersAPIApi.md#createdocumentfolder) | **POST** /public/v1/documents/folders | Create Documents Folder
*FoldersAPIApi* | [**createTemplateFolder**](docs/Api/FoldersAPIApi.md#createtemplatefolder) | **POST** /public/v1/templates/folders | Create Templates Folder
*FoldersAPIApi* | [**listDocumentFolders**](docs/Api/FoldersAPIApi.md#listdocumentfolders) | **GET** /public/v1/documents/folders | List Documents Folders
*FoldersAPIApi* | [**listTemplateFolders**](docs/Api/FoldersAPIApi.md#listtemplatefolders) | **GET** /public/v1/templates/folders | List Templates Folders
*FoldersAPIApi* | [**renameDocumentFolder**](docs/Api/FoldersAPIApi.md#renamedocumentfolder) | **PUT** /public/v1/documents/folders/{id} | Rename Documents Folder
*FoldersAPIApi* | [**renameTemplateFolder**](docs/Api/FoldersAPIApi.md#renametemplatefolder) | **PUT** /public/v1/templates/folders/{id} | Rename Templates Folder
*FormsApi* | [**listForm**](docs/Api/FormsApi.md#listform) | **GET** /public/v1/forms | Forms
*MembersApi* | [**detailsCurrentMember**](docs/Api/MembersApi.md#detailscurrentmember) | **GET** /public/v1/members/current | Current member details
*MembersApi* | [**detailsMember**](docs/Api/MembersApi.md#detailsmember) | **GET** /public/v1/members/{id} | Member details
*MembersApi* | [**listMembers**](docs/Api/MembersApi.md#listmembers) | **GET** /public/v1/members | List members
*OAuth20AuthenticationApi* | [**accessToken**](docs/Api/OAuth20AuthenticationApi.md#accesstoken) | **POST** /oauth2/access_token | Create/Refresh Access Token
*TemplatesApi* | [**deleteTemplate**](docs/Api/TemplatesApi.md#deletetemplate) | **DELETE** /public/v1/templates/{id} | Delete Template
*TemplatesApi* | [**detailsTemplate**](docs/Api/TemplatesApi.md#detailstemplate) | **GET** /public/v1/templates/{id}/details | Details Template
*TemplatesApi* | [**listTemplates**](docs/Api/TemplatesApi.md#listtemplates) | **GET** /public/v1/templates | List Templates
*WebhookEventsApi* | [**detailsWebhookEvent**](docs/Api/WebhookEventsApi.md#detailswebhookevent) | **GET** /public/v1/webhook-events/{id} | Get webhook event by uuid
*WebhookEventsApi* | [**listWebhookEvent**](docs/Api/WebhookEventsApi.md#listwebhookevent) | **GET** /public/v1/webhook-events | Get webhook event page
*WebhookSubscriptionsApi* | [**createWebhookSubscription**](docs/Api/WebhookSubscriptionsApi.md#createwebhooksubscription) | **POST** /public/v1/webhook-subscriptions | Create webhook subscription
*WebhookSubscriptionsApi* | [**deleteWebhookSubscription**](docs/Api/WebhookSubscriptionsApi.md#deletewebhooksubscription) | **DELETE** /public/v1/webhook-subscriptions/{id} | Delete webhook subscription
*WebhookSubscriptionsApi* | [**detailsWebhookSubscription**](docs/Api/WebhookSubscriptionsApi.md#detailswebhooksubscription) | **GET** /public/v1/webhook-subscriptions/{id} | Get webhook subscription by uuid
*WebhookSubscriptionsApi* | [**listWebhookSubscriptions**](docs/Api/WebhookSubscriptionsApi.md#listwebhooksubscriptions) | **GET** /public/v1/webhook-subscriptions | Get all webhook subscriptions
*WebhookSubscriptionsApi* | [**updateWebhookSubscription**](docs/Api/WebhookSubscriptionsApi.md#updatewebhooksubscription) | **PATCH** /public/v1/webhook-subscriptions/{id} | Update webhook subscription
*WebhookSubscriptionsApi* | [**updateWebhookSubscriptionSharedKey**](docs/Api/WebhookSubscriptionsApi.md#updatewebhooksubscriptionsharedkey) | **PATCH** /public/v1/webhook-subscriptions/{id}/shared-key | Regenerate webhook subscription shared key


## License
SDK is licensed under the following [License](https://github.com/PandaDoc/pandadoc-api-php-client/blob/main/LICENSE).