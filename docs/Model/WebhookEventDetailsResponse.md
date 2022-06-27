# # WebhookEventDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Unique webhook subscription event identifier | [optional]
**name** | **string** | Webhook subscription name | [optional]
**type** | [**\PandaDoc\Client\Model\WebhookEventTriggerEnum**](WebhookEventTriggerEnum.md) |  | [optional]
**httpStatusCode** | **int** | Webhook subscription event response http status code | [optional]
**error** | [**\PandaDoc\Client\Model\WebhookEventErrorEnum**](WebhookEventErrorEnum.md) |  | [optional]
**deliveryTime** | **\DateTime** | Webhook subscription event delivery time | [optional]
**url** | **string** | Webhook subscription event destination url | [optional]
**signature** | **string** | Webhook subscription event digital signature | [optional]
**requestBody** | **string** | Webhook subscription event request body | [optional]
**responseBody** | **string** | Webhook subscription response body | [optional]
**responseHeaders** | **string** | Webhook subscription response headers | [optional]
**eventTime** | **\DateTime** | Webhook subscription event trigger time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
