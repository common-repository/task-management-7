# Swagger\Client\ChecklistTemsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdJsonDelete**](ChecklistTemsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists/{checklistId}/checklistItems/{checklistItemId}.json | Deletes a checklistItem
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdPut**](ChecklistTemsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdPut) | **PUT** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists/{checklistId}/checklistItems/{checklistItemId} | Update an existing checklistItem
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdItemsJsonPost**](ChecklistTemsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdItemsJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists/{checklistId}/items.json | Add a new checklistItem


# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdJsonDelete($token, $board_id, $list_id, $card_id, $checklist_id, $checklist_item_id)

Deletes a checklistItem

Delete a checklistItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistTemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$list_id = 789; // int | list id to delete
$card_id = 789; // int | cardId to delete
$checklist_id = 789; // int | checklistId to delete
$checklist_item_id = 789; // int | checklistItemId to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdJsonDelete($token, $board_id, $list_id, $card_id, $checklist_id, $checklist_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistTemsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |
 **list_id** | **int**| list id to delete |
 **card_id** | **int**| cardId to delete |
 **checklist_id** | **int**| checklistId to delete |
 **checklist_item_id** | **int**| checklistItemId to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdPut**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdPut($token, $board_id, $list_id, $card_id, $checklist_id, $checklist_item_id, $body)

Update an existing checklistItem

Update the checklistItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistTemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | boardId to update
$list_id = 789; // int | listId to update
$card_id = 789; // int | cardId to update
$checklist_id = 789; // int | checklistId to update
$checklist_item_id = 789; // int | checklistItemId to update
$body = new \Swagger\Client\Model\Body42(); // \Swagger\Client\Model\Body42 | Update checklists object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdPut($token, $board_id, $list_id, $card_id, $checklist_id, $checklist_item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistTemsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdChecklistItemsChecklistItemIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| boardId to update |
 **list_id** | **int**| listId to update |
 **card_id** | **int**| cardId to update |
 **checklist_id** | **int**| checklistId to update |
 **checklist_item_id** | **int**| checklistItemId to update |
 **body** | [**\Swagger\Client\Model\Body42**](../Model/Body42.md)| Update checklists object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdItemsJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdItemsJsonPost($token, $board_id, $list_id, $card_id, $checklist_id, $body)

Add a new checklistItem

Created checklistItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistTemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$checklist_id = 789; // int | checklistId to Post
$body = new \Swagger\Client\Model\Body30(); // \Swagger\Client\Model\Body30 | Created comment object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdItemsJsonPost($token, $board_id, $list_id, $card_id, $checklist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistTemsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdItemsJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **checklist_id** | **int**| checklistId to Post |
 **body** | [**\Swagger\Client\Model\Body30**](../Model/Body30.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

