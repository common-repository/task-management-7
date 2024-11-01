# Swagger\Client\CardAttachmentsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdAttachmentsJsonPost**](CardAttachmentsApi.md#v1BoardsBoardIdListsListIdCardsCardIdAttachmentsJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/attachments.json | Add a new card_attachments


# **v1BoardsBoardIdListsListIdCardsCardIdAttachmentsJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdAttachmentsJsonPost($token, $board_id, $list_id, $card_id, $image_link, $attachment)

Add a new card_attachments

Created comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$image_link = new \Swagger\Client\Model\ImageLink(); // \Swagger\Client\Model\ImageLink | Paste Link.
$attachment = "/path/to/file.txt"; // \SplFileObject | Upload File.

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdAttachmentsJsonPost($token, $board_id, $list_id, $card_id, $image_link, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAttachmentsApi->v1BoardsBoardIdListsListIdCardsCardIdAttachmentsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |
 **list_id** | **int**| Selected list ID |
 **card_id** | **int**| Selected card ID |
 **image_link** | [**\Swagger\Client\Model\ImageLink**](../Model/ImageLink.md)| Paste Link. | [optional]
 **attachment** | **\SplFileObject**| Upload File. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

