# # UpdateIntegrationQuoteSection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Section ID to update. Invalid (or missing) ID causes creating a new section. | [optional]
**name** | **string** | Name of the quotes section. If you create a section without providing a value, it will have the default value. | [optional] [default to 'Section name']
**items** | [**\PandaDoc\Client\Model\UpdateIntegrationQuoteSectionItem[]**](UpdateIntegrationQuoteSectionItem.md) | Section items - this property overrides the existing items in the order specified. If you want to change only one item, you must still pass other items IDs. Otherwise these items will be removed. | [optional]
**settings** | [**\PandaDoc\Client\Model\QuoteUpdateRequestSettings**](QuoteUpdateRequestSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
