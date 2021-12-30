# PandaDoc\Client\TemplatesApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTemplate()**](TemplatesApi.md#deleteTemplate) | **DELETE** /public/v1/templates/{id} | Delete Template
[**detailsTemplate()**](TemplatesApi.md#detailsTemplate) | **GET** /public/v1/templates/{id}/details | Details Template
[**listTemplates()**](TemplatesApi.md#listTemplates) | **GET** /public/v1/templates | List Templates


## `deleteTemplate()`

```php
deleteTemplate($id)
```

Delete Template

Delete a template

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


$apiInstance = new PandaDoc\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = EE8yUNg5HztqVAuH85He8V; // string | Template ID

try {
    $apiInstance->deleteTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Template ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `detailsTemplate()`

```php
detailsTemplate($id): \PandaDoc\Client\Model\TemplateDetailsResponse
```

Details Template

Return detailed data about a template.

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


$apiInstance = new PandaDoc\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = EE8yUNg5HztqVAuH85He8V; // string | Template ID

try {
    $result = $apiInstance->detailsTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->detailsTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Template ID |

### Return type

[**\PandaDoc\Client\Model\TemplateDetailsResponse**](../Model/TemplateDetailsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($q, $shared, $deleted, $count, $page, $id, $folderUuid, $tag): \PandaDoc\Client\Model\TemplateListResponse
```

List Templates

Optionally, filter by a search query or tags.

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


$apiInstance = new PandaDoc\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = Sample onboarding template; // string | Optional search query. Filter by template name.
$shared = True; // bool | Returns only the shared templates.
$deleted = True; // bool | Optional. Returns only the deleted templates.
$count = 10; // int | Optionally, specify how many templates to return. Default is 50 templates, maximum is 100 templates.
$page = 56; // int | Optionally, specify which page of the dataset to return.
$id = e9LxBesSL73AeZMzeYdfvV; // string | Optionally, specify template ID.
$folderUuid = xDKHoJ8DkwhiTQSUzNveCJ; // string | UUID of the folder where the templates are stored.
$tag = array('tag_example'); // string[] | Optional search tag. Filter by template tag.

try {
    $result = $apiInstance->listTemplates($q, $shared, $deleted, $count, $page, $id, $folderUuid, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Optional search query. Filter by template name. | [optional]
 **shared** | **bool**| Returns only the shared templates. | [optional]
 **deleted** | **bool**| Optional. Returns only the deleted templates. | [optional]
 **count** | **int**| Optionally, specify how many templates to return. Default is 50 templates, maximum is 100 templates. | [optional]
 **page** | **int**| Optionally, specify which page of the dataset to return. | [optional]
 **id** | **string**| Optionally, specify template ID. | [optional]
 **folderUuid** | **string**| UUID of the folder where the templates are stored. | [optional]
 **tag** | [**string[]**](../Model/string.md)| Optional search tag. Filter by template tag. | [optional]

### Return type

[**\PandaDoc\Client\Model\TemplateListResponse**](../Model/TemplateListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
