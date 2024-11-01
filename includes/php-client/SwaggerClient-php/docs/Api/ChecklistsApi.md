# Swagger\Client\ChecklistsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonDelete**](ChecklistsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists/{checklistId}.json | Deletes a checklists
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonPut**](ChecklistsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonPut) | **PUT** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists/{checklistId}.json | Update an existing checklists
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonGet**](ChecklistsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonGet) | **GET** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists.json | Add a new checklists to the card
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonPost**](ChecklistsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists.json | Add a new checklists to the card


# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonDelete($token, $board_id, $list_id, $card_id, $checklist_id)

Deletes a checklists



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$list_id = 789; // int | list id to delete
$card_id = 789; // int | cardId to delete
$checklist_id = 789; // int | checklistId to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonDelete($token, $board_id, $list_id, $card_id, $checklist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonDelete: ', $e->getMessage(), PHP_EOL;
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

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonPut**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonPut($token, $board_id, $list_id, $card_id, $checklist_id, $body)

Update an existing checklists

Update the checklists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | boardId to update
$list_id = 789; // int | listId to update
$card_id = 789; // int | cardId to update
$checklist_id = 789; // int | checklistId to update
$body = new \Swagger\Client\Model\Body41(); // \Swagger\Client\Model\Body41 | Update checklists object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonPut($token, $board_id, $list_id, $card_id, $checklist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsChecklistIdJsonPut: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body41**](../Model/Body41.md)| Update checklists object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonGet**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonGet($token, $board_id, $list_id, $card_id)

Add a new checklists to the card

Created checklists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonGet($token, $board_id, $list_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonGet: ', $e->getMessage(), PHP_EOL;
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

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonPost($token, $board_id, $list_id, $card_id, $body)

Add a new checklists to the card

Created checklists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | Created comment object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonPost($token, $board_id, $list_id, $card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body12**](../Model/Body12.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

