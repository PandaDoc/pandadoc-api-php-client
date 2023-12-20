# PandaDoc\Client\DocumentRecipientsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocumentRecipient()**](DocumentRecipientsApi.md#addDocumentRecipient) | **POST** /public/v1/documents/{id}/recipients | Add Document Recipient
[**deleteDocumentRecipient()**](DocumentRecipientsApi.md#deleteDocumentRecipient) | **DELETE** /public/v1/documents/{id}/recipients/{recipient_id} | Delete Document Recipient
[**editDocumentRecipient()**](DocumentRecipientsApi.md#editDocumentRecipient) | **PATCH** /public/v1/documents/{id}/recipients/{recipient_id} | Edit Document Recipient
[**reassignDocumentRecipient()**](DocumentRecipientsApi.md#reassignDocumentRecipient) | **POST** /public/v1/documents/{id}/recipients/{recipient_id}/reassign | Reassign Document Recipient


## `addDocumentRecipient()`

```php
addDocumentRecipient($id, $documentRecipientCreateRequest): \PandaDoc\Client\Model\DocumentRecipientResponse
```

Add Document Recipient

Adds recipient as CC to document

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


$apiInstance = new PandaDoc\Client\Api\DocumentRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$documentRecipientCreateRequest = new \PandaDoc\Client\Model\DocumentRecipientCreateRequest(); // \PandaDoc\Client\Model\DocumentRecipientCreateRequest

try {
    $result = $apiInstance->addDocumentRecipient($id, $documentRecipientCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentRecipientsApi->addDocumentRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **documentRecipientCreateRequest** | [**\PandaDoc\Client\Model\DocumentRecipientCreateRequest**](../Model/DocumentRecipientCreateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\DocumentRecipientResponse**](../Model/DocumentRecipientResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDocumentRecipient()`

```php
deleteDocumentRecipient($id, $recipientId)
```

Delete Document Recipient

Deleted recipient from document

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


$apiInstance = new PandaDoc\Client\Api\DocumentRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$recipientId = tf5dGS3Tmu3cj228ao6fnc; // string | Recipient UUID

try {
    $apiInstance->deleteDocumentRecipient($id, $recipientId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentRecipientsApi->deleteDocumentRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **recipientId** | **string**| Recipient UUID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `editDocumentRecipient()`

```php
editDocumentRecipient($id, $recipientId, $documentRecipientEditRequest)
```

Edit Document Recipient

Edit document recipient's details

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


$apiInstance = new PandaDoc\Client\Api\DocumentRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$recipientId = tf5dGS3Tmu3cj228ao6fnc; // string | Recipient UUID
$documentRecipientEditRequest = new \PandaDoc\Client\Model\DocumentRecipientEditRequest(); // \PandaDoc\Client\Model\DocumentRecipientEditRequest

try {
    $apiInstance->editDocumentRecipient($id, $recipientId, $documentRecipientEditRequest);
} catch (Exception $e) {
    echo 'Exception when calling DocumentRecipientsApi->editDocumentRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **recipientId** | **string**| Recipient UUID |
 **documentRecipientEditRequest** | [**\PandaDoc\Client\Model\DocumentRecipientEditRequest**](../Model/DocumentRecipientEditRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `reassignDocumentRecipient()`

```php
reassignDocumentRecipient($id, $recipientId, $documentRecipientCreateRequest): \PandaDoc\Client\Model\DocumentRecipientResponse
```

Reassign Document Recipient

Replace document recipient with another contact

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


$apiInstance = new PandaDoc\Client\Api\DocumentRecipientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document UUID
$recipientId = tf5dGS3Tmu3cj228ao6fnc; // string | Recipient UUID
$documentRecipientCreateRequest = new \PandaDoc\Client\Model\DocumentRecipientCreateRequest(); // \PandaDoc\Client\Model\DocumentRecipientCreateRequest

try {
    $result = $apiInstance->reassignDocumentRecipient($id, $recipientId, $documentRecipientCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentRecipientsApi->reassignDocumentRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document UUID |
 **recipientId** | **string**| Recipient UUID |
 **documentRecipientCreateRequest** | [**\PandaDoc\Client\Model\DocumentRecipientCreateRequest**](../Model/DocumentRecipientCreateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\DocumentRecipientResponse**](../Model/DocumentRecipientResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
