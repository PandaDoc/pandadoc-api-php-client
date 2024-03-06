# PandaDoc\Client\QuotesApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteUpdate()**](QuotesApi.md#quoteUpdate) | **PUT** /public/v1/documents/{document_id}/quotes/{quote_id} | Quote update


## `quoteUpdate()`

```php
quoteUpdate($documentId, $quoteId, $quoteUpdateRequest): \PandaDoc\Client\Model\QuoteResponse
```

Quote update

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


$apiInstance = new PandaDoc\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID
$quoteId = 99aaa4f9-3250-4f5b-a953-6d7bfc5d8c9e; // string | Quote ID
$quoteUpdateRequest = new \PandaDoc\Client\Model\QuoteUpdateRequest(); // \PandaDoc\Client\Model\QuoteUpdateRequest

try {
    $result = $apiInstance->quoteUpdate($documentId, $quoteId, $quoteUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quoteUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **quoteId** | **string**| Quote ID |
 **quoteUpdateRequest** | [**\PandaDoc\Client\Model\QuoteUpdateRequest**](../Model/QuoteUpdateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\QuoteResponse**](../Model/QuoteResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
