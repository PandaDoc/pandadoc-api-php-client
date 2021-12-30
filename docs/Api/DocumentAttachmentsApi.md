# PandaDoc\Client\DocumentAttachmentsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocumentAttachment()**](DocumentAttachmentsApi.md#createDocumentAttachment) | **POST** /public/v1/documents/{id}/attachments | Document Attachment Create
[**deleteDocumentAttachment()**](DocumentAttachmentsApi.md#deleteDocumentAttachment) | **DELETE** /public/v1/documents/{id}/attachments/{attachment_id} | Document Attachment Delete
[**detailsDocumentAttachment()**](DocumentAttachmentsApi.md#detailsDocumentAttachment) | **GET** /public/v1/documents/{id}/attachments/{attachment_id} | Document Attachment Details
[**downloadDocumentAttachment()**](DocumentAttachmentsApi.md#downloadDocumentAttachment) | **GET** /public/v1/documents/{id}/attachments/{attachment_id}/download | Document Attachment Download
[**listDocumentAttachments()**](DocumentAttachmentsApi.md#listDocumentAttachments) | **GET** /public/v1/documents/{id}/attachments | Document Attachment List


## `createDocumentAttachment()`

```php
createDocumentAttachment($id, $file, $source, $name): \PandaDoc\Client\Model\DocumentAttachmentResponse
```

Document Attachment Create

Creates an attachment for a particular document

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


$apiInstance = new PandaDoc\Client\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$file = "/path/to/file.txt"; // \SplFileObject | Binary file to be attached to a document
$source = 'source_example'; // string | URL link to the file to be attached to a document
$name = 'name_example'; // string | Optional name to set for uploaded file

try {
    $result = $apiInstance->createDocumentAttachment($id, $file, $source, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->createDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **file** | **\SplFileObject****\SplFileObject**| Binary file to be attached to a document | [optional]
 **source** | **string**| URL link to the file to be attached to a document | [optional]
 **name** | **string**| Optional name to set for uploaded file | [optional]

### Return type

[**\PandaDoc\Client\Model\DocumentAttachmentResponse**](../Model/DocumentAttachmentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDocumentAttachment()`

```php
deleteDocumentAttachment($id, $attachmentId)
```

Document Attachment Delete

Deletes specific document's attachment

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


$apiInstance = new PandaDoc\Client\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$attachmentId = 89ce2f49-10fb-4e9b-b5f3-e28be2a5c042; // string | Attachment UUID

try {
    $apiInstance->deleteDocumentAttachment($id, $attachmentId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->deleteDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **attachmentId** | **string**| Attachment UUID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `detailsDocumentAttachment()`

```php
detailsDocumentAttachment($id, $attachmentId): \PandaDoc\Client\Model\DocumentAttachmentResponse
```

Document Attachment Details

Returns details of the specific document's attachment

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


$apiInstance = new PandaDoc\Client\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$attachmentId = 89ce2f49-10fb-4e9b-b5f3-e28be2a5c042; // string | Attachment UUID

try {
    $result = $apiInstance->detailsDocumentAttachment($id, $attachmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->detailsDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **attachmentId** | **string**| Attachment UUID |

### Return type

[**\PandaDoc\Client\Model\DocumentAttachmentResponse**](../Model/DocumentAttachmentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `downloadDocumentAttachment()`

```php
downloadDocumentAttachment($id, $attachmentId): \SplFileObject
```

Document Attachment Download

Returns document attachment file for download

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


$apiInstance = new PandaDoc\Client\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$attachmentId = 89ce2f49-10fb-4e9b-b5f3-e28be2a5c042; // string | Attachment UUID

try {
    $result = $apiInstance->downloadDocumentAttachment($id, $attachmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->downloadDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **attachmentId** | **string**| Attachment UUID |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/_*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDocumentAttachments()`

```php
listDocumentAttachments($id): \PandaDoc\Client\Model\DocumentAttachmentResponse[]
```

Document Attachment List

Return list of objects attached to particular document

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


$apiInstance = new PandaDoc\Client\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID

try {
    $result = $apiInstance->listDocumentAttachments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->listDocumentAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |

### Return type

[**\PandaDoc\Client\Model\DocumentAttachmentResponse[]**](../Model/DocumentAttachmentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
