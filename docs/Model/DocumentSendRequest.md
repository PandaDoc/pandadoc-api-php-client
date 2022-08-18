# # DocumentSendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | A message that will be sent by email with a link to a document to sign. | [optional]
**subject** | **string** | Value that will be used as the email subject. | [optional]
**silent** | **bool** | Disables sent, viewed, comment, and completed email notifications for document recipients and the document sender. By default, notifications emails are sent for specific actions. If set as true, it won&#39;t affect the \&quot;Approve document\&quot; email notification sent to the Approver. | [optional]
**sender** | **array<string,string>** | You can set a sender of a document as an &#x60;email&#x60; or &#x60;membership_id&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
