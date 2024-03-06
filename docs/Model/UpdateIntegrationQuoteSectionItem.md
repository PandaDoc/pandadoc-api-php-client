# # UpdateIntegrationQuoteSectionItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Item ID to update. Invalid (or missing) ID causes creating a new item. | [optional]
**sku** | **string** | Product SKU. If you create an item without providing a value, it will have the default value. | [optional] [default to '#']
**name** | **string** | Item name. If you create an item without providing a value, it will have the default value. | [optional] [default to '']
**description** | **string** | Item description. If you create an item without providing a value, it will have the default value. | [optional] [default to '']
**qty** | **int** | Item QTY. If you create an item without providing a value, it will have the default value. | [optional] [default to 1]
**price** | **float** | Item price. If you create an item without providing a value, it will have the default value. If &#x60;price_settings&#x60; is passed, this value may change after the quote is updated. | [optional] [default to 0]
**priceSettings** | [**\PandaDoc\Client\Model\QuoteUpdateRequestPriceSettings**](QuoteUpdateRequestPriceSettings.md) |  | [optional]
**cost** | **float** | Item cost. If you create an item without providing a value, it will have the default value. | [optional]
**billingFrequency** | **string** |  | [optional]
**contractTerm** | **int** | Contract term. Measured in units set in the &#x60;billing_frequency&#x60; parameter. | [optional]
**referenceId** | **string** | Use this field to pass an id that references this item in external systems. | [optional]
**options** | [**\PandaDoc\Client\Model\QuoteUpdateRequestOptions**](QuoteUpdateRequestOptions.md) |  | [optional]
**customColumns** | **array<string,string>** |  | [optional]
**discounts** | [**array<string,\PandaDoc\Client\Model\QuoteUpdateRequestDiscounts>**](QuoteUpdateRequestDiscounts.md) | Item discounts. | [optional]
**taxes** | [**array<string,\PandaDoc\Client\Model\QuoteUpdateRequestDiscounts>**](QuoteUpdateRequestDiscounts.md) | Item taxes. | [optional]
**fees** | [**array<string,\PandaDoc\Client\Model\QuoteUpdateRequestDiscounts>**](QuoteUpdateRequestDiscounts.md) | Item fees. | [optional]
**multipliers** | **array<string,float>** | Item multipliers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
