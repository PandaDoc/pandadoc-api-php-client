# PandaDoc\Client\WebhookSubscriptionsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhookSubscription()**](WebhookSubscriptionsApi.md#createWebhookSubscription) | **POST** /public/v1/webhook-subscriptions | Create webhook subscription
[**deleteWebhookSubscription()**](WebhookSubscriptionsApi.md#deleteWebhookSubscription) | **DELETE** /public/v1/webhook-subscriptions/{id} | Delete webhook subscription
[**detailsWebhookSubscription()**](WebhookSubscriptionsApi.md#detailsWebhookSubscription) | **GET** /public/v1/webhook-subscriptions/{id} | Get webhook subscription by uuid
[**listWebhookSubscriptions()**](WebhookSubscriptionsApi.md#listWebhookSubscriptions) | **GET** /public/v1/webhook-subscriptions | Get all webhook subscriptions
[**updateWebhookSubscription()**](WebhookSubscriptionsApi.md#updateWebhookSubscription) | **PATCH** /public/v1/webhook-subscriptions/{id} | Update webhook subscription
[**updateWebhookSubscriptionSharedKey()**](WebhookSubscriptionsApi.md#updateWebhookSubscriptionSharedKey) | **PATCH** /public/v1/webhook-subscriptions/{id}/shared-key | Regenerate webhook subscription shared key


## `createWebhookSubscription()`

```php
createWebhookSubscription($webhookSubscriptionCreateRequest): \PandaDoc\Client\Model\WebhookSubscriptionItemResponse
```

Create webhook subscription

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


$apiInstance = new PandaDoc\Client\Api\WebhookSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookSubscriptionCreateRequest = new \PandaDoc\Client\Model\WebhookSubscriptionCreateRequest(); // \PandaDoc\Client\Model\WebhookSubscriptionCreateRequest

try {
    $result = $apiInstance->createWebhookSubscription($webhookSubscriptionCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSubscriptionsApi->createWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookSubscriptionCreateRequest** | [**\PandaDoc\Client\Model\WebhookSubscriptionCreateRequest**](../Model/WebhookSubscriptionCreateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\WebhookSubscriptionItemResponse**](../Model/WebhookSubscriptionItemResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWebhookSubscription()`

```php
deleteWebhookSubscription($id)
```

Delete webhook subscription

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


$apiInstance = new PandaDoc\Client\Api\WebhookSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook subscription uuid

try {
    $apiInstance->deleteWebhookSubscription($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSubscriptionsApi->deleteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook subscription uuid |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `detailsWebhookSubscription()`

```php
detailsWebhookSubscription($id): \PandaDoc\Client\Model\WebhookSubscriptionItemResponse
```

Get webhook subscription by uuid

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


$apiInstance = new PandaDoc\Client\Api\WebhookSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook subscription uuid

try {
    $result = $apiInstance->detailsWebhookSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSubscriptionsApi->detailsWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook subscription uuid |

### Return type

[**\PandaDoc\Client\Model\WebhookSubscriptionItemResponse**](../Model/WebhookSubscriptionItemResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWebhookSubscriptions()`

```php
listWebhookSubscriptions(): \PandaDoc\Client\Model\WebhookSubscriptionListResponse
```

Get all webhook subscriptions

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


$apiInstance = new PandaDoc\Client\Api\WebhookSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWebhookSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSubscriptionsApi->listWebhookSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PandaDoc\Client\Model\WebhookSubscriptionListResponse**](../Model/WebhookSubscriptionListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWebhookSubscription()`

```php
updateWebhookSubscription($id, $webhookSubscriptionPatchRequest): \PandaDoc\Client\Model\WebhookSubscriptionItemResponse
```

Update webhook subscription

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


$apiInstance = new PandaDoc\Client\Api\WebhookSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook subscription uuid
$webhookSubscriptionPatchRequest = new \PandaDoc\Client\Model\WebhookSubscriptionPatchRequest(); // \PandaDoc\Client\Model\WebhookSubscriptionPatchRequest

try {
    $result = $apiInstance->updateWebhookSubscription($id, $webhookSubscriptionPatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSubscriptionsApi->updateWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook subscription uuid |
 **webhookSubscriptionPatchRequest** | [**\PandaDoc\Client\Model\WebhookSubscriptionPatchRequest**](../Model/WebhookSubscriptionPatchRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\WebhookSubscriptionItemResponse**](../Model/WebhookSubscriptionItemResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWebhookSubscriptionSharedKey()`

```php
updateWebhookSubscriptionSharedKey($id): \PandaDoc\Client\Model\WebhookSubscriptionSharedKeyResponse
```

Regenerate webhook subscription shared key

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


$apiInstance = new PandaDoc\Client\Api\WebhookSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook subscription uuid

try {
    $result = $apiInstance->updateWebhookSubscriptionSharedKey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSubscriptionsApi->updateWebhookSubscriptionSharedKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook subscription uuid |

### Return type

[**\PandaDoc\Client\Model\WebhookSubscriptionSharedKeyResponse**](../Model/WebhookSubscriptionSharedKeyResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
