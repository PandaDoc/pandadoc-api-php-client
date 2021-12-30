# PandaDoc\Client\FoldersAPIApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocumentFolder()**](FoldersAPIApi.md#createDocumentFolder) | **POST** /public/v1/documents/folders | Create Documents Folder
[**createTemplateFolder()**](FoldersAPIApi.md#createTemplateFolder) | **POST** /public/v1/templates/folders | Create Templates Folder
[**listDocumentFolders()**](FoldersAPIApi.md#listDocumentFolders) | **GET** /public/v1/documents/folders | List Documents Folders
[**listTemplateFolders()**](FoldersAPIApi.md#listTemplateFolders) | **GET** /public/v1/templates/folders | List Templates Folders
[**renameDocumentFolder()**](FoldersAPIApi.md#renameDocumentFolder) | **PUT** /public/v1/documents/folders/{id} | Rename Documents Folder
[**renameTemplateFolder()**](FoldersAPIApi.md#renameTemplateFolder) | **PUT** /public/v1/templates/folders/{id} | Rename Templates Folder


## `createDocumentFolder()`

```php
createDocumentFolder($documentsFolderCreateRequest): \PandaDoc\Client\Model\DocumentsFolderCreateResponse
```

Create Documents Folder

Create a new folder to store your documents.

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


$apiInstance = new PandaDoc\Client\Api\FoldersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentsFolderCreateRequest = new \PandaDoc\Client\Model\DocumentsFolderCreateRequest(); // \PandaDoc\Client\Model\DocumentsFolderCreateRequest

try {
    $result = $apiInstance->createDocumentFolder($documentsFolderCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersAPIApi->createDocumentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentsFolderCreateRequest** | [**\PandaDoc\Client\Model\DocumentsFolderCreateRequest**](../Model/DocumentsFolderCreateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\DocumentsFolderCreateResponse**](../Model/DocumentsFolderCreateResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTemplateFolder()`

```php
createTemplateFolder($templatesFolderCreateRequest): \PandaDoc\Client\Model\TemplatesFolderCreateResponse
```

Create Templates Folder

Create a new folder to store your templates.

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


$apiInstance = new PandaDoc\Client\Api\FoldersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templatesFolderCreateRequest = new \PandaDoc\Client\Model\TemplatesFolderCreateRequest(); // \PandaDoc\Client\Model\TemplatesFolderCreateRequest

try {
    $result = $apiInstance->createTemplateFolder($templatesFolderCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersAPIApi->createTemplateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templatesFolderCreateRequest** | [**\PandaDoc\Client\Model\TemplatesFolderCreateRequest**](../Model/TemplatesFolderCreateRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\TemplatesFolderCreateResponse**](../Model/TemplatesFolderCreateResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDocumentFolders()`

```php
listDocumentFolders($parentUuid, $count, $page): \PandaDoc\Client\Model\DocumentsFolderListResponse
```

List Documents Folders

Get the list of folders that contain Documents in your account.

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


$apiInstance = new PandaDoc\Client\Api\FoldersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parentUuid = Nq8htXxFssmhRxAPSP4SBP; // string | The UUID of the folder containing folders. To list the folders located in the root folder, remove this parameter in the request.
$count = 10; // int | Optionally, specify how many folders to return. Default is 50 folders, maximum is 100 folders.
$page = 56; // int | Optionally, specify which page of the dataset to return.

try {
    $result = $apiInstance->listDocumentFolders($parentUuid, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersAPIApi->listDocumentFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentUuid** | **string**| The UUID of the folder containing folders. To list the folders located in the root folder, remove this parameter in the request. | [optional]
 **count** | **int**| Optionally, specify how many folders to return. Default is 50 folders, maximum is 100 folders. | [optional]
 **page** | **int**| Optionally, specify which page of the dataset to return. | [optional]

### Return type

[**\PandaDoc\Client\Model\DocumentsFolderListResponse**](../Model/DocumentsFolderListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTemplateFolders()`

```php
listTemplateFolders($parentUuid, $count, $page): \PandaDoc\Client\Model\TemplatesFolderListResponse
```

List Templates Folders

Get the list of folders that contain Templates in your account.

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


$apiInstance = new PandaDoc\Client\Api\FoldersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parentUuid = Nq8htXxFssmhRxAPSP4SBP; // string | The UUID of the folder containing folders. To list the folders located in the root folder, remove this parameter in the request.
$count = 10; // int | Optionally, specify how many folders to return. Default is 50 folders, maximum is 100 folders.
$page = 56; // int | Optionally, specify which page of the dataset to return.

try {
    $result = $apiInstance->listTemplateFolders($parentUuid, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersAPIApi->listTemplateFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentUuid** | **string**| The UUID of the folder containing folders. To list the folders located in the root folder, remove this parameter in the request. | [optional]
 **count** | **int**| Optionally, specify how many folders to return. Default is 50 folders, maximum is 100 folders. | [optional]
 **page** | **int**| Optionally, specify which page of the dataset to return. | [optional]

### Return type

[**\PandaDoc\Client\Model\TemplatesFolderListResponse**](../Model/TemplatesFolderListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `renameDocumentFolder()`

```php
renameDocumentFolder($id, $documentsFolderRenameRequest): \PandaDoc\Client\Model\DocumentsFolderRenameResponse
```

Rename Documents Folder

Rename Documents Folder.

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


$apiInstance = new PandaDoc\Client\Api\FoldersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = Nq8htXxFssmhRxAPSP4SBP; // string | The UUID of the folder that you are renaming.
$documentsFolderRenameRequest = new \PandaDoc\Client\Model\DocumentsFolderRenameRequest(); // \PandaDoc\Client\Model\DocumentsFolderRenameRequest

try {
    $result = $apiInstance->renameDocumentFolder($id, $documentsFolderRenameRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersAPIApi->renameDocumentFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The UUID of the folder that you are renaming. |
 **documentsFolderRenameRequest** | [**\PandaDoc\Client\Model\DocumentsFolderRenameRequest**](../Model/DocumentsFolderRenameRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\DocumentsFolderRenameResponse**](../Model/DocumentsFolderRenameResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `renameTemplateFolder()`

```php
renameTemplateFolder($id, $templatesFolderRenameRequest): \PandaDoc\Client\Model\TemplatesFolderRenameResponse
```

Rename Templates Folder

Rename a templates folder.

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


$apiInstance = new PandaDoc\Client\Api\FoldersAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = Nq8htXxFssmhRxAPSP4SBP; // string | The UUID of the folder which you are renaming.
$templatesFolderRenameRequest = new \PandaDoc\Client\Model\TemplatesFolderRenameRequest(); // \PandaDoc\Client\Model\TemplatesFolderRenameRequest

try {
    $result = $apiInstance->renameTemplateFolder($id, $templatesFolderRenameRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersAPIApi->renameTemplateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The UUID of the folder which you are renaming. |
 **templatesFolderRenameRequest** | [**\PandaDoc\Client\Model\TemplatesFolderRenameRequest**](../Model/TemplatesFolderRenameRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\TemplatesFolderRenameResponse**](../Model/TemplatesFolderRenameResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
