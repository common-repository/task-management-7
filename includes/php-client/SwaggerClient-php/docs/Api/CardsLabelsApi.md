# Swagger\Client\CardsLabelsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdLabelsJsonPost**](CardsLabelsApi.md#v1BoardsBoardIdListsListIdCardsCardIdLabelsJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/labels.json | Add a new labels to the card


# **v1BoardsBoardIdListsListIdCardsCardIdLabelsJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdLabelsJsonPost($token, $board_id, $list_id, $card_id, $body)

Add a new labels to the card

Created labels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$body = new \Swagger\Client\Model\Body29(); // \Swagger\Client\Model\Body29 | Created comment object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdLabelsJsonPost($token, $board_id, $list_id, $card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsLabelsApi->v1BoardsBoardIdListsListIdCardsCardIdLabelsJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body29**](../Model/Body29.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

