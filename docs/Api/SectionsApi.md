# PandaDoc\Client\SectionsApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSections()**](SectionsApi.md#listSections) | **GET** /public/v1/documents/{document_id}/sections | List sections
[**sectionDetails()**](SectionsApi.md#sectionDetails) | **GET** /public/v1/documents/{document_id}/sections/uploads/{upload_id} | Section details
[**sectionInfo()**](SectionsApi.md#sectionInfo) | **GET** /public/v1/documents/{document_id}/sections/{section_id} | Section Info
[**uploadSection()**](SectionsApi.md#uploadSection) | **POST** /public/v1/documents/{document_id}/sections/uploads | Upload section


## `listSections()`

```php
listSections($documentId): \PandaDoc\Client\Model\UploadSectionListResponse
```

List sections

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


$apiInstance = new PandaDoc\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID

try {
    $result = $apiInstance->listSections($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->listSections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |

### Return type

[**\PandaDoc\Client\Model\UploadSectionListResponse**](../Model/UploadSectionListResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `sectionDetails()`

```php
sectionDetails($documentId, $uploadId): \PandaDoc\Client\Model\UploadSectionStatusResponse
```

Section details

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


$apiInstance = new PandaDoc\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID
$uploadId = LQ6cUT7xevPLUEgJeF8Zrm; // string | Upload ID

try {
    $result = $apiInstance->sectionDetails($documentId, $uploadId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->sectionDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **uploadId** | **string**| Upload ID |

### Return type

[**\PandaDoc\Client\Model\UploadSectionStatusResponse**](../Model/UploadSectionStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `sectionInfo()`

```php
sectionInfo($documentId, $sectionId): \PandaDoc\Client\Model\SectionInfoResponse
```

Section Info

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


$apiInstance = new PandaDoc\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID
$sectionId = LQ6cUT7xevPLUEgJeF8Zrm; // string | Section ID

try {
    $result = $apiInstance->sectionInfo($documentId, $sectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->sectionInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **sectionId** | **string**| Section ID |

### Return type

[**\PandaDoc\Client\Model\SectionInfoResponse**](../Model/SectionInfoResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `uploadSection()`

```php
uploadSection($documentId, $uploadSectionRequest): \PandaDoc\Client\Model\UploadSectionResponse
```

Upload section

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


$apiInstance = new PandaDoc\Client\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = BhVzRcxH9Z2LgfPPGXFUBa; // string | Document ID
$uploadSectionRequest = {"template_uuid":"hryJY9mqYZHjQCYQuSjRQg","recipients":[{"email":"josh@example.com","first_name":"Josh","last_name":"Ron","role":"user"}],"fields":{"Favorite.Color":{"value":"PandaDoc green"},"Delivery":{"value":"Same Day Delivery"},"Like":{"value":true},"Date":{"value":"2019-12-31T00:00:00.000Z"}},"pricing_tables":[{"name":"Pricing Table 1","data_merge":true,"options":{"Tax":{"type":"percent","name":"Tax","value":10}},"sections":[{"title":"Sample Section","default":true,"rows":[{"options":{"optional":true,"optional_selected":true,"qty_editable":true},"data":{"Name":"Toy Panda","Description":"Fluffy!","Price":10,"QTY":3,"Tax":{"value":20,"type":"percent"}},"custom_fields":{"Fluffiness":"5 / 5"}}]}]}],"content_placeholders":[{"block_id":"{block_id}","content_library_items":[{"id":"{cli_id}","pricing_tables":[{"name":"Pricing Table 1","data_merge":false,"options":{"discount":{"type":"absolute","name":"Discount","value":2.26}},"sections":[{"title":"Sample Section","default":true,"rows":[{"options":{"optional":true,"optional_selected":true,"qty_editable":true},"data":{"name":"Placeholder Panda","price":10,"qty":3}}]}]}]},{"id":"{cli_id_2}","recipients":[{"email":"john@example.com","first_name":"John","last_name":"Roe","role":"Signer","signing_order":2}],"fields":{"Date":{"value":"2019-12-31T00:00:00.000Z"}}}]}]}; // \PandaDoc\Client\Model\UploadSectionRequest | Use a PandaDoc template or an existing PDF to upload a section. See the creation request examples [by template](/schemas/UploadSectionByTemplateRequest) and [by pdf](/schemas/UploadSectionByPdfRequest)

try {
    $result = $apiInstance->uploadSection($documentId, $uploadSectionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->uploadSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **uploadSectionRequest** | [**\PandaDoc\Client\Model\UploadSectionRequest**](../Model/UploadSectionRequest.md)| Use a PandaDoc template or an existing PDF to upload a section. See the creation request examples [by template](/schemas/UploadSectionByTemplateRequest) and [by pdf](/schemas/UploadSectionByPdfRequest) |

### Return type

[**\PandaDoc\Client\Model\UploadSectionResponse**](../Model/UploadSectionResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
