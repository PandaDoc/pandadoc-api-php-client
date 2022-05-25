# PandaDoc\Client\DocumentsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeDocumentStatus()**](DocumentsApi.md#changeDocumentStatus) | **PATCH** /public/v1/documents/{id}/status | Document status change
[**createDocument()**](DocumentsApi.md#createDocument) | **POST** /public/v1/documents | Create document
[**createDocumentLink()**](DocumentsApi.md#createDocumentLink) | **POST** /public/v1/documents/{id}/session | Create a Document Link
[**createLinkedObject()**](DocumentsApi.md#createLinkedObject) | **POST** /public/v1/documents/{id}/linked-objects | Create Linked Object
[**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /public/v1/documents/{id} | Delete document by id
[**deleteLinkedObject()**](DocumentsApi.md#deleteLinkedObject) | **DELETE** /public/v1/documents/{id}/linked-objects/{linked_object_id} | Delete Linked Object
[**detailsDocument()**](DocumentsApi.md#detailsDocument) | **GET** /public/v1/documents/{id}/details | Document details
[**downloadDocument()**](DocumentsApi.md#downloadDocument) | **GET** /public/v1/documents/{id}/download | Document download
[**downloadProtectedDocument()**](DocumentsApi.md#downloadProtectedDocument) | **GET** /public/v1/documents/{id}/download-protected | Download document protected
[**listDocuments()**](DocumentsApi.md#listDocuments) | **GET** /public/v1/documents | List documents
[**listLinkedObjects()**](DocumentsApi.md#listLinkedObjects) | **GET** /public/v1/documents/{id}/linked-objects | List Linked Objects
[**sendDocument()**](DocumentsApi.md#sendDocument) | **POST** /public/v1/documents/{id}/send | Send Document
[**statusDocument()**](DocumentsApi.md#statusDocument) | **GET** /public/v1/documents/{id} | Document status
[**transferAllDocumentsOwnership()**](DocumentsApi.md#transferAllDocumentsOwnership) | **PATCH** /public/v1/documents/ownership | Transfer all documents ownership
[**transferDocumentOwnership()**](DocumentsApi.md#transferDocumentOwnership) | **PATCH** /public/v1/documents/{id}/ownership | Update document ownership


## `changeDocumentStatus()`

```php
changeDocumentStatus($id, $documentStatusChangeRequest)
```

Document status change

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Specify document ID.
$documentStatusChangeRequest = new \PandaDoc\Client\Model\DocumentStatusChangeRequest(); // \PandaDoc\Client\Model\DocumentStatusChangeRequest

try {
    $apiInstance->changeDocumentStatus($id, $documentStatusChangeRequest);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->changeDocumentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |
 **documentStatusChangeRequest** | [**\PandaDoc\Client\Model\DocumentStatusChangeRequest**](../Model/DocumentStatusChangeRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($documentCreateRequest, $editorVer): \PandaDoc\Client\Model\DocumentCreateResponse
```

Create document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentCreateRequest = {"name":"Simple API Sample Document from PandaDoc Template","template_uuid":"onoznwTq4Y3EELMPyvucnc","recipients":[{"email":"josh@example.com","first_name":"Josh","last_name":"Ron","role":"user"}],"tokens":[{"name":"Favorite.Pet","value":"Panda"}],"fields":{"Favorite.Color":{"value":"PandaDoc green"},"Delivery":{"value":"Same Day Delivery"},"Like":{"value":true},"Date":{"value":"2019-12-31T00:00:00.000Z"}},"metadata":{"my_favorite_pet":"Panda"},"tags":["created_via_api","test_document"],"images":[{"name":"Image 1","urls":["https://s3.amazonaws.com/pd-static-content/public-docs/pandadoc-panda-bear.png"]}],"pricing_tables":[{"name":"Pricing Table 1","data_merge":true,"options":{"Tax":{"type":"percent","name":"Tax","value":10}},"sections":[{"title":"Sample Section","default":true,"rows":[{"options":{"optional":true,"optional_selected":true,"qty_editable":true},"data":{"Name":"Toy Panda","Description":"Fluffy!","Price":10,"QTY":3,"Tax":{"value":20,"type":"percent"}},"custom_fields":{"Fluffiness":"5 / 5"}}]}]}]}; // \PandaDoc\Client\Model\DocumentCreateRequest | Use a PandaDoc template or an existing PDF to create a document. See the creation request examples [by template](/schemas/DocumentCreateByTemplateRequest) and [by pdf](/schemas/DocumentCreateByPdfRequest)
$editorVer = ev2; // string | Set this parameter as `ev1` if you want to create a document from PDF with Classic Editor when both editors are enabled for the workspace.

try {
    $result = $apiInstance->createDocument($documentCreateRequest, $editorVer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentCreateRequest** | [**\PandaDoc\Client\Model\DocumentCreateRequest**](../Model/DocumentCreateRequest.md)| Use a PandaDoc template or an existing PDF to create a document. See the creation request examples [by template](/schemas/DocumentCreateByTemplateRequest) and [by pdf](/schemas/DocumentCreateByPdfRequest) |
 **editorVer** | **string**| Set this parameter as &#x60;ev1&#x60; if you want to create a document from PDF with Classic Editor when both editors are enabled for the workspace. | [optional]

### Return type

[**\PandaDoc\Client\Model\DocumentCreateResponse**](../Model/DocumentCreateResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDocumentLink()`

```php
createDocumentLink($id, $documentCreateLinkRequest): \PandaDoc\Client\Model\DocumentCreateLinkResponse
```

Create a Document Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ZPeAfcpzr9aiVs5vqUf6jg; // string | Document ID
$documentCreateLinkRequest = new \PandaDoc\Client\Model\DocumentCreateLinkRequest(); // \PandaDoc\Client\Model\DocumentCreateLinkRequest

try {
    $result = $apiInstance->createDocumentLink($id, $documentCreateLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDocumentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document ID |
 **documentCreateLinkRequest** | [**\PandaDoc\Client\Model\DocumentCreateLinkRequest**](../Model/DocumentCreateLinkRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\DocumentCreateLinkResponse**](../Model/DocumentCreateLinkResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createLinkedObject()`

```php
createLinkedObject($id, $linkedObjectCreateRequest): \PandaDoc\Client\Model\LinkedObjectCreateResponse
```

Create Linked Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ZPeAfcpzr9aiVs5vqUf6jg; // string | Specify document ID.
$linkedObjectCreateRequest = new \PandaDoc\Client\Model\LinkedObjectCreateRequest(); // \PandaDoc\Client\Model\LinkedObjectCreateRequest

try {
    $result = $apiInstance->createLinkedObject($id, $linkedObjectCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createLinkedObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |
 **linkedObjectCreateRequest** | [**\PandaDoc\Client\Model\LinkedObjectCreateRequest**](../Model/LinkedObjectCreateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\LinkedObjectCreateResponse**](../Model/LinkedObjectCreateResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDocument()`

```php
deleteDocument($id)
```

Delete document by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID

try {
    $apiInstance->deleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLinkedObject()`

```php
deleteLinkedObject($id, $linkedObjectId)
```

Delete Linked Object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ZPeAfcpzr9aiVs5vqUf6jg; // string | Specify document ID.
$linkedObjectId = deb0d530-d759-4189-a422-8d2265e01b2e; // string | Specify linked object ID.

try {
    $apiInstance->deleteLinkedObject($id, $linkedObjectId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteLinkedObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |
 **linkedObjectId** | **string**| Specify linked object ID. |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `detailsDocument()`

```php
detailsDocument($id): \PandaDoc\Client\Model\DocumentDetailsResponse
```

Document details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID

try {
    $result = $apiInstance->detailsDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->detailsDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document ID |

### Return type

[**\PandaDoc\Client\Model\DocumentDetailsResponse**](../Model/DocumentDetailsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `downloadDocument()`

```php
downloadDocument($id, $watermarkColor, $watermarkFontSize, $watermarkOpacity, $watermarkText, $separateFiles): \SplFileObject
```

Document download

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Specify document ID.
$watermarkColor = #FF5733; // string | HEX code (for example `#FF5733`).
$watermarkFontSize = 12; // int | Font size of the watermark.
$watermarkOpacity = 0.5; // float | In range 0.0-1.0
$watermarkText = John Doe inc.; // string | Specify watermark text.
$separateFiles = True; // bool | Set as `true` if you want to receive a zip file with all documents in separate when document transaction contains more than 1.

try {
    $result = $apiInstance->downloadDocument($id, $watermarkColor, $watermarkFontSize, $watermarkOpacity, $watermarkText, $separateFiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |
 **watermarkColor** | **string**| HEX code (for example &#x60;#FF5733&#x60;). | [optional]
 **watermarkFontSize** | **int**| Font size of the watermark. | [optional]
 **watermarkOpacity** | **float**| In range 0.0-1.0 | [optional]
 **watermarkText** | **string**| Specify watermark text. | [optional]
 **separateFiles** | **bool**| Set as &#x60;true&#x60; if you want to receive a zip file with all documents in separate when document transaction contains more than 1. | [optional]

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `downloadProtectedDocument()`

```php
downloadProtectedDocument($id, $separateFiles): \SplFileObject
```

Download document protected

Download a signed PDF of a completed document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = Mebvyy3NGsGBnY2rPLkH84; // string | Specify document ID.
$separateFiles = True; // bool | Set as `true` if you want to receive a zip file with all documents in separate when document transaction contains more than 1.

try {
    $result = $apiInstance->downloadProtectedDocument($id, $separateFiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->downloadProtectedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |
 **separateFiles** | **bool**| Set as &#x60;true&#x60; if you want to receive a zip file with all documents in separate when document transaction contains more than 1. | [optional]

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDocuments()`

```php
listDocuments($completedFrom, $completedTo, $contactId, $count, $createdFrom, $createdTo, $deleted, $id, $folderUuid, $formId, $membershipId, $metadata, $modifiedFrom, $modifiedTo, $orderBy, $page, $q, $status, $statusNe, $tag, $templateId): \PandaDoc\Client\Model\DocumentListResponse
```

List documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$completedFrom = 2021-10-27T15:22:23.132757Z; // string | Return results where the `date_completed` field (ISO 8601) is greater than or equal to this value.
$completedTo = 2021-10-27T15:22:23.132757Z; // string | Return results where the `date_completed` field (ISO 8601) is less than or equal to this value.
$contactId = 9FeAY2NB3C9qDdtQRb4tTL; // string | Returns results where 'contact_id' is present in document as recipient or approver
$count = 50; // int | Specify how many document results to return. Default is 50 documents, maximum is 100 documents.
$createdFrom = 2021-10-27T15:22:23.132757Z; // string | Return results where the `date_created` field (ISO 8601) is greater than or equal to this value.
$createdTo = 2021-10-27T15:22:23.132757Z; // string | Return results where the `date_created` field (ISO 8601) is less than this value.
$deleted = True; // bool | Returns only the deleted documents.
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string
$folderUuid = BhVzRcxH9Z2LgfPPGXFUBa; // string | The UUID of the folder where the documents are stored.
$formId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Specify the form used for documents creation. This parameter can't be used with template_id.
$membershipId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Returns results where 'membership_id' is present in document as owner (should be member uuid)
$metadata = ["metadata_opportunity_id=2181432","metadata_custom_key=custom_value"]; // string[] | Specify metadata to filter by in the format of `metadata_{metadata-key}={metadata-value}` such as `metadata_opportunity_id=2181432`. The `metadata_` prefix is always required.
$modifiedFrom = 2021-10-27T15:22:23.132757Z; // string | Return results where the `date_modified` field (iso-8601) is greater than or equal to this value.
$modifiedTo = 2021-10-27T15:22:23.132757Z; // string | Return results where the `date_modified` field (iso-8601) is less than this value.
$orderBy = name; // \PandaDoc\Client\Model\DocumentOrderingFieldsEnum | Specify the order of documents to return. Use `value` (for example, `date_created`) for ASC and `-value` (for example, `-date_created`) for DESC.
$page = 1; // int | Specify which page of the dataset to return.
$q = Sample Document; // string | Search query. Filter by document reference number (this token is stored on the template level) or name.
$status = new \PandaDoc\Client\Model\\PandaDoc\Client\Model\DocumentStatusRequestEnum(); // \PandaDoc\Client\Model\DocumentStatusRequestEnum | Specify the status of documents to return.   * 0: document.draft   * 1: document.sent   * 2: document.completed   * 3: document.uploaded   * 4: document.error   * 5: document.viewed   * 6: document.waiting_approval   * 7: document.approved   * 8: document.rejected   * 9: document.waiting_pay   * 10: document.paid   * 11: document.voided   * 12: document.declined   * 13: document.external_review
$statusNe = new \PandaDoc\Client\Model\\PandaDoc\Client\Model\DocumentStatusRequestEnum(); // \PandaDoc\Client\Model\DocumentStatusRequestEnum | Specify the status of documents to return (exclude).   * 0: document.draft   * 1: document.sent   * 2: document.completed   * 3: document.uploaded   * 4: document.error   * 5: document.viewed   * 6: document.waiting_approval   * 7: document.approved   * 8: document.rejected   * 9: document.waiting_pay   * 10: document.paid   * 11: document.voided   * 12: document.declined   * 13: document.external_review
$tag = tag_1; // string | Search tag. Filter by document tag.
$templateId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Specify the template used for documents creation. Parameter can't be used with form_id.

try {
    $result = $apiInstance->listDocuments($completedFrom, $completedTo, $contactId, $count, $createdFrom, $createdTo, $deleted, $id, $folderUuid, $formId, $membershipId, $metadata, $modifiedFrom, $modifiedTo, $orderBy, $page, $q, $status, $statusNe, $tag, $templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->listDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **completedFrom** | **string**| Return results where the &#x60;date_completed&#x60; field (ISO 8601) is greater than or equal to this value. | [optional]
 **completedTo** | **string**| Return results where the &#x60;date_completed&#x60; field (ISO 8601) is less than or equal to this value. | [optional]
 **contactId** | **string**| Returns results where &#39;contact_id&#39; is present in document as recipient or approver | [optional]
 **count** | **int**| Specify how many document results to return. Default is 50 documents, maximum is 100 documents. | [optional]
 **createdFrom** | **string**| Return results where the &#x60;date_created&#x60; field (ISO 8601) is greater than or equal to this value. | [optional]
 **createdTo** | **string**| Return results where the &#x60;date_created&#x60; field (ISO 8601) is less than this value. | [optional]
 **deleted** | **bool**| Returns only the deleted documents. | [optional]
 **id** | **string**|  | [optional]
 **folderUuid** | **string**| The UUID of the folder where the documents are stored. | [optional]
 **formId** | **string**| Specify the form used for documents creation. This parameter can&#39;t be used with template_id. | [optional]
 **membershipId** | **string**| Returns results where &#39;membership_id&#39; is present in document as owner (should be member uuid) | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Specify metadata to filter by in the format of &#x60;metadata_{metadata-key}&#x3D;{metadata-value}&#x60; such as &#x60;metadata_opportunity_id&#x3D;2181432&#x60;. The &#x60;metadata_&#x60; prefix is always required. | [optional]
 **modifiedFrom** | **string**| Return results where the &#x60;date_modified&#x60; field (iso-8601) is greater than or equal to this value. | [optional]
 **modifiedTo** | **string**| Return results where the &#x60;date_modified&#x60; field (iso-8601) is less than this value. | [optional]
 **orderBy** | [**\PandaDoc\Client\Model\DocumentOrderingFieldsEnum**](../Model/.md)| Specify the order of documents to return. Use &#x60;value&#x60; (for example, &#x60;date_created&#x60;) for ASC and &#x60;-value&#x60; (for example, &#x60;-date_created&#x60;) for DESC. | [optional]
 **page** | **int**| Specify which page of the dataset to return. | [optional]
 **q** | **string**| Search query. Filter by document reference number (this token is stored on the template level) or name. | [optional]
 **status** | [**\PandaDoc\Client\Model\DocumentStatusRequestEnum**](../Model/.md)| Specify the status of documents to return.   * 0: document.draft   * 1: document.sent   * 2: document.completed   * 3: document.uploaded   * 4: document.error   * 5: document.viewed   * 6: document.waiting_approval   * 7: document.approved   * 8: document.rejected   * 9: document.waiting_pay   * 10: document.paid   * 11: document.voided   * 12: document.declined   * 13: document.external_review | [optional]
 **statusNe** | [**\PandaDoc\Client\Model\DocumentStatusRequestEnum**](../Model/.md)| Specify the status of documents to return (exclude).   * 0: document.draft   * 1: document.sent   * 2: document.completed   * 3: document.uploaded   * 4: document.error   * 5: document.viewed   * 6: document.waiting_approval   * 7: document.approved   * 8: document.rejected   * 9: document.waiting_pay   * 10: document.paid   * 11: document.voided   * 12: document.declined   * 13: document.external_review | [optional]
 **tag** | **string**| Search tag. Filter by document tag. | [optional]
 **templateId** | **string**| Specify the template used for documents creation. Parameter can&#39;t be used with form_id. | [optional]

### Return type

[**\PandaDoc\Client\Model\DocumentListResponse**](../Model/DocumentListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLinkedObjects()`

```php
listLinkedObjects($id): \PandaDoc\Client\Model\LinkedObjectListResponse
```

List Linked Objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ZPeAfcpzr9aiVs5vqUf6jg; // string | Specify document ID.

try {
    $result = $apiInstance->listLinkedObjects($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->listLinkedObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |

### Return type

[**\PandaDoc\Client\Model\LinkedObjectListResponse**](../Model/LinkedObjectListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `sendDocument()`

```php
sendDocument($id, $documentSendRequest): \PandaDoc\Client\Model\DocumentSendResponse
```

Send Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ZPeAfcpzr9aiVs5vqUf6jg; // string | Document ID
$documentSendRequest = new \PandaDoc\Client\Model\DocumentSendRequest(); // \PandaDoc\Client\Model\DocumentSendRequest

try {
    $result = $apiInstance->sendDocument($id, $documentSendRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document ID |
 **documentSendRequest** | [**\PandaDoc\Client\Model\DocumentSendRequest**](../Model/DocumentSendRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\DocumentSendResponse**](../Model/DocumentSendResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `statusDocument()`

```php
statusDocument($id): \PandaDoc\Client\Model\DocumentStatusResponse
```

Document status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Specify document ID.

try {
    $result = $apiInstance->statusDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->statusDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |

### Return type

[**\PandaDoc\Client\Model\DocumentStatusResponse**](../Model/DocumentStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `transferAllDocumentsOwnership()`

```php
transferAllDocumentsOwnership($documentTransferAllOwnershipRequest)
```

Transfer all documents ownership

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentTransferAllOwnershipRequest = new \PandaDoc\Client\Model\DocumentTransferAllOwnershipRequest(); // \PandaDoc\Client\Model\DocumentTransferAllOwnershipRequest

try {
    $apiInstance->transferAllDocumentsOwnership($documentTransferAllOwnershipRequest);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->transferAllDocumentsOwnership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentTransferAllOwnershipRequest** | [**\PandaDoc\Client\Model\DocumentTransferAllOwnershipRequest**](../Model/DocumentTransferAllOwnershipRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `transferDocumentOwnership()`

```php
transferDocumentOwnership($id, $documentTransferOwnershipRequest)
```

Update document ownership

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Setup prefix (e.g. Bearer) for API key, if needed
$config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'API-Key');

// Configure OAuth2 access token for authorization: oauth2
// $config = PandaDoc\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PandaDoc\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Specify document ID.
$documentTransferOwnershipRequest = new \PandaDoc\Client\Model\DocumentTransferOwnershipRequest(); // \PandaDoc\Client\Model\DocumentTransferOwnershipRequest

try {
    $apiInstance->transferDocumentOwnership($id, $documentTransferOwnershipRequest);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->transferDocumentOwnership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify document ID. |
 **documentTransferOwnershipRequest** | [**\PandaDoc\Client\Model\DocumentTransferOwnershipRequest**](../Model/DocumentTransferOwnershipRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
