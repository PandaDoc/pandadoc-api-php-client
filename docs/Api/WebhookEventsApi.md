# PandaDoc\Client\WebhookEventsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**detailsWebhookEvent()**](WebhookEventsApi.md#detailsWebhookEvent) | **GET** /public/v1/webhook-events/{id} | Get webhook event by uuid
[**listWebhookEvent()**](WebhookEventsApi.md#listWebhookEvent) | **GET** /public/v1/webhook-events | Get webhook event page


## `detailsWebhookEvent()`

```php
detailsWebhookEvent($id): \PandaDoc\Client\Model\WebhookEventDetailsResponse
```

Get webhook event by uuid

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


$apiInstance = new PandaDoc\Client\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook event uuid

try {
    $result = $apiInstance->detailsWebhookEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->detailsWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook event uuid |

### Return type

[**\PandaDoc\Client\Model\WebhookEventDetailsResponse**](../Model/WebhookEventDetailsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWebhookEvent()`

```php
listWebhookEvent($count, $page, $since, $to, $type, $httpStatusCode, $error): \PandaDoc\Client\Model\WebhookEventPageResponse
```

Get webhook event page

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


$apiInstance = new PandaDoc\Client\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of element in page
$page = 56; // int | Page number
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter option: all events from specified timestamp
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter option: all events up to specified timestamp
$type = array(new \PandaDoc\Client\Model\\PandaDoc\Client\Model\WebhookEventTriggerEnum()); // \PandaDoc\Client\Model\WebhookEventTriggerEnum[] | Filter option: all events of type
$httpStatusCode = array(new \PandaDoc\Client\Model\\PandaDoc\Client\Model\WebhookEventHttpStatusCodeGroupEnum()); // \PandaDoc\Client\Model\WebhookEventHttpStatusCodeGroupEnum[] | Filter option: all events of http status code
$error = array(new \PandaDoc\Client\Model\\PandaDoc\Client\Model\WebhookEventErrorEnum()); // \PandaDoc\Client\Model\WebhookEventErrorEnum[] | Filter option: all events with following error

try {
    $result = $apiInstance->listWebhookEvent($count, $page, $since, $to, $type, $httpStatusCode, $error);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->listWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of element in page |
 **page** | **int**| Page number |
 **since** | **\DateTime**| Filter option: all events from specified timestamp | [optional]
 **to** | **\DateTime**| Filter option: all events up to specified timestamp | [optional]
 **type** | [**\PandaDoc\Client\Model\WebhookEventTriggerEnum[]**](../Model/\PandaDoc\Client\Model\WebhookEventTriggerEnum.md)| Filter option: all events of type | [optional]
 **httpStatusCode** | [**\PandaDoc\Client\Model\WebhookEventHttpStatusCodeGroupEnum[]**](../Model/\PandaDoc\Client\Model\WebhookEventHttpStatusCodeGroupEnum.md)| Filter option: all events of http status code | [optional]
 **error** | [**\PandaDoc\Client\Model\WebhookEventErrorEnum[]**](../Model/\PandaDoc\Client\Model\WebhookEventErrorEnum.md)| Filter option: all events with following error | [optional]

### Return type

[**\PandaDoc\Client\Model\WebhookEventPageResponse**](../Model/WebhookEventPageResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
