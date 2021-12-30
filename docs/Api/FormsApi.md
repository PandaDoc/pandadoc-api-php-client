# PandaDoc\Client\FormsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listForm()**](FormsApi.md#listForm) | **GET** /public/v1/forms | Forms


## `listForm()`

```php
listForm($count, $page, $status, $orderBy, $asc, $name): \PandaDoc\Client\Model\FormListResponse
```

Forms

List forms.

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


$apiInstance = new PandaDoc\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | Optionally, specify how many forms to return. Default is 50 forms, maximum is 100 forms.
$page = 56; // int | Optionally, specify which page of the dataset to return.
$status = array('status_example'); // string[] | Optionally, specify which status of the forms dataset to return.
$orderBy = 'orderBy_example'; // string | Optionally, specify the form dataset order to return.
$asc = True; // bool | Optionally, specify sorting the result-set in ascending or descending order.
$name = New Form; // string | Specify the form name.

try {
    $result = $apiInstance->listForm($count, $page, $status, $orderBy, $asc, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->listForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Optionally, specify how many forms to return. Default is 50 forms, maximum is 100 forms. | [optional]
 **page** | **int**| Optionally, specify which page of the dataset to return. | [optional]
 **status** | [**string[]**](../Model/string.md)| Optionally, specify which status of the forms dataset to return. | [optional]
 **orderBy** | **string**| Optionally, specify the form dataset order to return. | [optional]
 **asc** | **bool**| Optionally, specify sorting the result-set in ascending or descending order. | [optional]
 **name** | **string**| Specify the form name. | [optional]

### Return type

[**\PandaDoc\Client\Model\FormListResponse**](../Model/FormListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
