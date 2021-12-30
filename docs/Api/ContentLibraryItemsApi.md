# PandaDoc\Client\ContentLibraryItemsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**detailsContentLibraryItem()**](ContentLibraryItemsApi.md#detailsContentLibraryItem) | **GET** /public/v1/content-library-items/{id}/details | Details Content Library Item
[**listContentLibraryItems()**](ContentLibraryItemsApi.md#listContentLibraryItems) | **GET** /public/v1/content-library-items | List Content Library Item


## `detailsContentLibraryItem()`

```php
detailsContentLibraryItem($id): \PandaDoc\Client\Model\ContentLibraryItemResponse
```

Details Content Library Item

Return detailed data about a content library item.

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


$apiInstance = new PandaDoc\Client\Api\ContentLibraryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = UXdP7Lnbvvr4WEb2wzM2hc; // string | Content Library Item ID

try {
    $result = $apiInstance->detailsContentLibraryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentLibraryItemsApi->detailsContentLibraryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Content Library Item ID |

### Return type

[**\PandaDoc\Client\Model\ContentLibraryItemResponse**](../Model/ContentLibraryItemResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listContentLibraryItems()`

```php
listContentLibraryItems($q, $id, $deleted, $folderUuid, $count, $page, $tag): \PandaDoc\Client\Model\ContentLibraryItemListResponse
```

List Content Library Item

Optionally filter by a search query or tags.

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


$apiInstance = new PandaDoc\Client\Api\ContentLibraryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = Sample Pricing Table; // string | Search query. Filter by content library item name.
$id = UXdP7Lnbvvr4WEb2wzM2hc; // string | Specify content library item ID.
$deleted = True; // bool | Returns only the deleted content library items.
$folderUuid = S6xX7saJfA44mtJxGWd95L; // string | The UUID of the folder where the content library items are stored.
$count = 10; // int | Specify how many content library items to return. Default is 50 content library items, maximum is 100 content library items.
$page = 56; // int | Specify which page of the dataset to return.
$tag = pricing_tables; // string | Search tag. Filter by content library item tag.

try {
    $result = $apiInstance->listContentLibraryItems($q, $id, $deleted, $folderUuid, $count, $page, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentLibraryItemsApi->listContentLibraryItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Search query. Filter by content library item name. | [optional]
 **id** | **string**| Specify content library item ID. | [optional]
 **deleted** | **bool**| Returns only the deleted content library items. | [optional]
 **folderUuid** | **string**| The UUID of the folder where the content library items are stored. | [optional]
 **count** | **int**| Specify how many content library items to return. Default is 50 content library items, maximum is 100 content library items. | [optional]
 **page** | **int**| Specify which page of the dataset to return. | [optional]
 **tag** | **string**| Search tag. Filter by content library item tag. | [optional]

### Return type

[**\PandaDoc\Client\Model\ContentLibraryItemListResponse**](../Model/ContentLibraryItemListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
