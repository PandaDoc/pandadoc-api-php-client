# PandaDoc\Client\UserAndWorkspaceManagementApi

All URIs are relative to https://api.pandadoc.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMember()**](UserAndWorkspaceManagementApi.md#addMember) | **POST** /public/v1/workspaces/{workspace_id}/members | Add member
[**createUser()**](UserAndWorkspaceManagementApi.md#createUser) | **POST** /public/v1/users | Create User
[**createWorkspace()**](UserAndWorkspaceManagementApi.md#createWorkspace) | **POST** /public/v1/workspaces | Create Workspace


## `addMember()`

```php
addMember($workspaceId, $addMemberRequest, $notifyUser, $notifyWsAdmins): \PandaDoc\Client\Model\AddMemberResponse
```

Add member

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


$apiInstance = new PandaDoc\Client\Api\UserAndWorkspaceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = BhVzRcxH9Z2LgfPPGXFUBa; // string
$addMemberRequest = new \PandaDoc\Client\Model\AddMemberRequest(); // \PandaDoc\Client\Model\AddMemberRequest
$notifyUser = True; // bool | Send a confirmation email to the user that was added to workspace(s).
$notifyWsAdmins = True; // bool | Send a confirmation email to all workspace admins indicating that the user has been added to the workspace.

try {
    $result = $apiInstance->addMember($workspaceId, $addMemberRequest, $notifyUser, $notifyWsAdmins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAndWorkspaceManagementApi->addMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**|  |
 **addMemberRequest** | [**\PandaDoc\Client\Model\AddMemberRequest**](../Model/AddMemberRequest.md)|  |
 **notifyUser** | **bool**| Send a confirmation email to the user that was added to workspace(s). | [optional]
 **notifyWsAdmins** | **bool**| Send a confirmation email to all workspace admins indicating that the user has been added to the workspace. | [optional]

### Return type

[**\PandaDoc\Client\Model\AddMemberResponse**](../Model/AddMemberResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($createUserRequest, $notifyUser, $notifyWsAdmins): \PandaDoc\Client\Model\CreateUserResponse
```

Create User

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


$apiInstance = new PandaDoc\Client\Api\UserAndWorkspaceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createUserRequest = new \PandaDoc\Client\Model\CreateUserRequest(); // \PandaDoc\Client\Model\CreateUserRequest
$notifyUser = True; // bool | Send a confirmation email to the user that was added to workspace(s).
$notifyWsAdmins = True; // bool | Send a confirmation email to all workspace admins indicating that the user has been added to the workspace.

try {
    $result = $apiInstance->createUser($createUserRequest, $notifyUser, $notifyWsAdmins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAndWorkspaceManagementApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createUserRequest** | [**\PandaDoc\Client\Model\CreateUserRequest**](../Model/CreateUserRequest.md)|  |
 **notifyUser** | **bool**| Send a confirmation email to the user that was added to workspace(s). | [optional]
 **notifyWsAdmins** | **bool**| Send a confirmation email to all workspace admins indicating that the user has been added to the workspace. | [optional]

### Return type

[**\PandaDoc\Client\Model\CreateUserResponse**](../Model/CreateUserResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorkspace()`

```php
createWorkspace($createWorkspaceRequest): \PandaDoc\Client\Model\CreateWorkspaceResponse
```

Create Workspace

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


$apiInstance = new PandaDoc\Client\Api\UserAndWorkspaceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createWorkspaceRequest = new \PandaDoc\Client\Model\CreateWorkspaceRequest(); // \PandaDoc\Client\Model\CreateWorkspaceRequest

try {
    $result = $apiInstance->createWorkspace($createWorkspaceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAndWorkspaceManagementApi->createWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createWorkspaceRequest** | [**\PandaDoc\Client\Model\CreateWorkspaceRequest**](../Model/CreateWorkspaceRequest.md)|  |

### Return type

[**\PandaDoc\Client\Model\CreateWorkspaceResponse**](../Model/CreateWorkspaceResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
