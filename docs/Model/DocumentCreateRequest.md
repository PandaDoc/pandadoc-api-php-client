# # DocumentCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name the document you are creating. | [optional]
**templateUuid** | **string** | ID of the template you want to use. You can copy it from an in-app template URL such as &#x60;https://app.pandadoc.com/a/#/templates/{ID}/content&#x60;. A template ID is also obtained by listing templates. | [optional]
**folderUuid** | **string** | ID of the folder where the created document should be stored. | [optional]
**owner** | **array<string,string>** | You can set an owner of a document as an &#x60;email&#x60; or &#x60;membership_id&#x60; | [optional]
**recipients** | [**\PandaDoc\Client\Model\DocumentCreateRequestRecipients[]**](DocumentCreateRequestRecipients.md) | The list of recipients you&#39;re sending the document to. Every object must contain the &#x60;email&#x60; parameter. The &#x60;role&#x60;, &#x60;first_name&#x60; and &#x60;last_name&#x60; parameters are optional. If the &#x60;role&#x60; parameter is passed, a person is assigned all fields matching their corresponding role. If a role was not passed, a person receives a read-only link to view the document. If the &#x60;first_name&#x60; and &#x60;last_name&#x60; are not passed, the system does this 1. Creates a new contact, if none exists with the given &#x60;email&#x60;; or 2. Gets the existing contact with the given &#x60;email&#x60; that already exists. | [optional]
**tokens** | [**\PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]**](DocumentCreateByTemplateRequestTokens.md) | You can pass a list of tokens/values to pre-fill tokens used in a template. Name is a token name in a template. Value is a real value you would like to replace a token with. | [optional]
**fields** | **object** | You can pass a list of fields/values to pre-fill fields used in a template. Please note Signature field can&#39;t be pre-filled. | [optional]
**metadata** | **object** | You can pass arbitrary data in the key-value format to associate custom information with a document. This information is returned in any API requests for the document details by id. | [optional]
**tags** | **string[]** | Mark your document with one or several tags. | [optional]
**images** | [**\PandaDoc\Client\Model\DocumentCreateRequestImages[]**](DocumentCreateRequestImages.md) | You can pass a list of images to image blocks (one image in one block) for replacement. | [optional]
**pricingTables** | [**\PandaDoc\Client\Model\PricingTableRequest[]**](PricingTableRequest.md) | Information to construct or populate a pricing table can be passed when creating a document. All product information must be passed when creating a new document. Products stored in PandaDoc cannot be used to populate table rows at this time. Keep in mind that this is an array, so multiple table objects can be passed to a document. | [optional]
**contentPlaceholders** | [**\PandaDoc\Client\Model\DocumentCreateRequestContentPlaceholders[]**](DocumentCreateRequestContentPlaceholders.md) | You may replace Content Library Item Placeholders with a few content library items each and pre-fill fields/variables values, pricing table items, and assign recipients to roles from there. | [optional]
**url** | **string** | Use a URL to specify the PDF. We support only URLs starting with https. | [optional]
**parseFormFields** | **bool** | Set this parameter as true if you create a document from a PDF with form fields and as false if you upload a PDF with field tags. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
