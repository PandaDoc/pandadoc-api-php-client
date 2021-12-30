# PandaDoc\Client\APILogsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**detailsLog()**](APILogsApi.md#detailsLog) | **GET** /public/v1/logs/{id} | Details API Log
[**listLogs()**](APILogsApi.md#listLogs) | **GET** /public/v1/logs | List API Log


## `detailsLog()`

```php
detailsLog($id): \PandaDoc\Client\Model\APILogDetailsResponse
```

Details API Log

Returns details of the specific API log event.

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


$apiInstance = new PandaDoc\Client\Api\APILogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = AXp2jrHMK2MKv_lRqmQ; // string | Log event id.

try {
    $result = $apiInstance->detailsLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APILogsApi->detailsLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Log event id. |

### Return type

[**\PandaDoc\Client\Model\APILogDetailsResponse**](../Model/APILogDetailsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogs()`

```php
listLogs($since, $to, $count, $page, $statuses, $methods, $search, $environmentType): \PandaDoc\Client\Model\APILogListResponse
```

List API Log

Get the list of all logs within the selected workspace. Optionally filter by date, page, and `#` of items per page.

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


$apiInstance = new PandaDoc\Client\Api\APILogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = -7d; // string | Determines a point in time from which logs should be fetched. Either a specific ISO 8601 datetime or a relative identifier such as \"-90d\" (for past 90 days).
$to = now; // string | Determines a point in time from which logs should be fetched. Either a specific ISO 8601 datetime or a relative identifier such as \"-10d\" (for past 10 days) or a special \"now\" value.
$count = 10; // int | The amount of items on each page.
$page = 56; // int | Page number of the results returned.
$statuses = [400,500]; // int[] | Returns only the predefined status codes. Allows 1xx, 2xx, 3xx, 4xx, and 5xx.
$methods = ["GET","POST"]; // string[] | Returns only the predefined HTTP methods. Allows GET, POST, PUT, PATCH, and DELETE.
$search = documents/hryJY9mqYZHjQCYQuSjRQg/send; // string | Returns the results containing a string.
$environmentType = 'environmentType_example'; // string | Returns logs for production/sandbox.

try {
    $result = $apiInstance->listLogs($since, $to, $count, $page, $statuses, $methods, $search, $environmentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APILogsApi->listLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **string**| Determines a point in time from which logs should be fetched. Either a specific ISO 8601 datetime or a relative identifier such as \&quot;-90d\&quot; (for past 90 days). | [optional]
 **to** | **string**| Determines a point in time from which logs should be fetched. Either a specific ISO 8601 datetime or a relative identifier such as \&quot;-10d\&quot; (for past 10 days) or a special \&quot;now\&quot; value. | [optional]
 **count** | **int**| The amount of items on each page. | [optional]
 **page** | **int**| Page number of the results returned. | [optional]
 **statuses** | [**int[]**](../Model/int.md)| Returns only the predefined status codes. Allows 1xx, 2xx, 3xx, 4xx, and 5xx. | [optional]
 **methods** | [**string[]**](../Model/string.md)| Returns only the predefined HTTP methods. Allows GET, POST, PUT, PATCH, and DELETE. | [optional]
 **search** | **string**| Returns the results containing a string. | [optional]
 **environmentType** | **string**| Returns logs for production/sandbox. | [optional]

### Return type

[**\PandaDoc\Client\Model\APILogListResponse**](../Model/APILogListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
