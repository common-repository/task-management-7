# Swagger\Client\CommentsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonDelete**](CommentsApi.md#v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/comments/{commentId}.json | Deletes a comment
[**v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonPut**](CommentsApi.md#v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonPut) | **PUT** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/comments/{commentId}.json | Update a comment
[**v1BoardsBoardIdListsListIdCardsCardIdCommentsJsonPost**](CommentsApi.md#v1BoardsBoardIdListsListIdCardsCardIdCommentsJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/comments.json | Add a new comments to the card


# **v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonDelete($token, $board_id, $list_id, $card_id, $comment_id)

Deletes a comment

Delete a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$list_id = 789; // int | listId to delete
$card_id = 789; // int | cardId to delete
$comment_id = 789; // int | commentId to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonDelete($token, $board_id, $list_id, $card_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |
 **list_id** | **int**| listId to delete |
 **card_id** | **int**| cardId to delete |
 **comment_id** | **int**| commentId to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonPut**
> object v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonPut($token, $board_id, $list_id, $card_id, $comment_id, $body)

Update a comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to update
$list_id = 789; // int | list id to update
$card_id = 789; // int | card id to update
$comment_id = 789; // int | commentId to deupdatelete
$body = new \Swagger\Client\Model\Body40(); // \Swagger\Client\Model\Body40 | Update comment object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonPut($token, $board_id, $list_id, $card_id, $comment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->v1BoardsBoardIdListsListIdCardsCardIdCommentsCommentIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to update |
 **list_id** | **int**| list id to update |
 **card_id** | **int**| card id to update |
 **comment_id** | **int**| commentId to deupdatelete |
 **body** | [**\Swagger\Client\Model\Body40**](../Model/Body40.md)| Update comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdCommentsJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdCommentsJsonPost($token, $board_id, $list_id, $card_id, $body)

Add a new comments to the card

Created comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$body = new \Swagger\Client\Model\Body27(); // \Swagger\Client\Model\Body27 | Created comment object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCommentsJsonPost($token, $board_id, $list_id, $card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->v1BoardsBoardIdListsListIdCardsCardIdCommentsJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body27**](../Model/Body27.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

