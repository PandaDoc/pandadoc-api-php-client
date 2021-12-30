# PandaDoc\Client\OAuth20AuthenticationApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessToken()**](OAuth20AuthenticationApi.md#accessToken) | **POST** /oauth2/access_token | Create/Refresh Access Token


## `accessToken()`

```php
accessToken($grantType, $clientId, $clientSecret, $code, $scope, $refreshToken): \PandaDoc\Client\Model\OAuth2AccessTokenResponse
```

Create/Refresh Access Token

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


$apiInstance = new PandaDoc\Client\Api\OAuth20AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grantType = 'refresh_token'; // string | This value must be set to `refresh_token`.
$clientId = 'clientId_example'; // string | Client ID that is automatically generated after application creation in the Developer Dashboard.
$clientSecret = 'clientSecret_example'; // string | Client secret that is automatically generated after application creation in the Developer Dashboard.
$code = 'code_example'; // string | `auth_code` from the server on the previous step (Authorize a PandaDoc User).
$scope = 'scope_example'; // string | Requested permissions. Use `read+write` as our default value to send documents.
$refreshToken = 'refreshToken_example'; // string | `refresh_token` you received and stored from the server when initially creating an `access_token`.

try {
    $result = $apiInstance->accessToken($grantType, $clientId, $clientSecret, $code, $scope, $refreshToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth20AuthenticationApi->accessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantType** | **string**| This value must be set to &#x60;refresh_token&#x60;. | [optional] [default to &#39;refresh_token&#39;]
 **clientId** | **string**| Client ID that is automatically generated after application creation in the Developer Dashboard. | [optional]
 **clientSecret** | **string**| Client secret that is automatically generated after application creation in the Developer Dashboard. | [optional]
 **code** | **string**| &#x60;auth_code&#x60; from the server on the previous step (Authorize a PandaDoc User). | [optional]
 **scope** | **string**| Requested permissions. Use &#x60;read+write&#x60; as our default value to send documents. | [optional]
 **refreshToken** | **string**| &#x60;refresh_token&#x60; you received and stored from the server when initially creating an &#x60;access_token&#x60;. | [optional]

### Return type

[**\PandaDoc\Client\Model\OAuth2AccessTokenResponse**](../Model/OAuth2AccessTokenResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
