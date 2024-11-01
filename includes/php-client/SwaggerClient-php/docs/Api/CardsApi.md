# Swagger\Client\CardsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdCardsJsonDelete**](CardsApi.md#v1BoardsBoardIdCardsJsonDelete) | **DELETE** /v1/boards/{boardId}/cards.json | Deletes a cards
[**v1BoardsBoardIdCardsSearchJsonGet**](CardsApi.md#v1BoardsBoardIdCardsSearchJsonGet) | **GET** /v1/boards/{boardId}/cards/search.json | cards by name
[**v1BoardsBoardIdListsListIdCardsCardIdActivitiesJsonGet**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdActivitiesJsonGet) | **GET** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/activities.json | Activities
[**v1BoardsBoardIdListsListIdCardsCardIdAttachmentsAttachmentIdJsonDelete**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdAttachmentsAttachmentIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/attachments/{attachmentId}.json | Remove attachment from card
[**v1BoardsBoardIdListsListIdCardsCardIdCardSubscribersJsonPost**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdCardSubscribersJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/card_subscribers.json | Subscribe Card
[**v1BoardsBoardIdListsListIdCardsCardIdChecklistsCheckListIdItemsItemIdConvertToCardJsonPost**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdChecklistsCheckListIdItemsItemIdConvertToCardJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/checklists/{checkListId}/items/{itemId}/convert_to_card.json | Convert item to card
[**v1BoardsBoardIdListsListIdCardsCardIdCopyJsonPost**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdCopyJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/copy.json | Copy card
[**v1BoardsBoardIdListsListIdCardsCardIdJsonDelete**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}.json | Deletes the card
[**v1BoardsBoardIdListsListIdCardsCardIdJsonGet**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdJsonGet) | **GET** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}.json | Cards
[**v1BoardsBoardIdListsListIdCardsCardIdJsonPut**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdJsonPut) | **PUT** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}.json | Edit card
[**v1BoardsBoardIdListsListIdCardsCardIdSearchJsonGet**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdSearchJsonGet) | **GET** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/search.json | cards by listID
[**v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonDelete**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/users/{userId}.json | Deletes a cardUser
[**v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonPost**](CardsApi.md#v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/users/{userId}.json | Assign member to card
[**v1BoardsBoardIdListsListIdCardsJsonGet**](CardsApi.md#v1BoardsBoardIdListsListIdCardsJsonGet) | **GET** /v1/boards/{boardId}/lists/{listId}/cards.json | View list cards of the board
[**v1BoardsBoardIdListsListIdCardsJsonPost**](CardsApi.md#v1BoardsBoardIdListsListIdCardsJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards.json | Add a new card
[**v1BoardsBoardIdListsListIdCardsJsonPut**](CardsApi.md#v1BoardsBoardIdListsListIdCardsJsonPut) | **PUT** /v1/boards/{boardId}/lists/{listId}/cards.json | Move list cards
[**v1UsersUserIdCardsJsonGet**](CardsApi.md#v1UsersUserIdCardsJsonGet) | **GET** /v1/users/{userId}/cards.json | View user cards


# **v1BoardsBoardIdCardsJsonDelete**
> object v1BoardsBoardIdCardsJsonDelete($token, $board_id)

Deletes a cards



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdCardsJsonDelete($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdCardsJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdCardsSearchJsonGet**
> object v1BoardsBoardIdCardsSearchJsonGet($token, $board_id)

cards by name

Returns Card Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID

try {
    $result = $apiInstance->v1BoardsBoardIdCardsSearchJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdCardsSearchJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdActivitiesJsonGet**
> object v1BoardsBoardIdListsListIdCardsCardIdActivitiesJsonGet($token, $board_id, $list_id, $card_id)

Activities

Returns Card Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdActivitiesJsonGet($token, $board_id, $list_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdActivitiesJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdListsListIdCardsCardIdAttachmentsAttachmentIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdAttachmentsAttachmentIdJsonDelete($token, $board_id, $list_id, $card_id, $attachment_id)

Remove attachment from card

Remove attachment from card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Board ID to delete
$list_id = 789; // int | list ID to delete
$card_id = 789; // int | card ID to delete
$attachment_id = 789; // int | Attachment ID to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdAttachmentsAttachmentIdJsonDelete($token, $board_id, $list_id, $card_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdAttachmentsAttachmentIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Board ID to delete |
 **list_id** | **int**| list ID to delete |
 **card_id** | **int**| card ID to delete |
 **attachment_id** | **int**| Attachment ID to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdCardSubscribersJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdCardSubscribersJsonPost($token, $board_id, $list_id, $card_id, $body)

Subscribe Card

Subscribe Card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$body = new \Swagger\Client\Model\Body28(); // \Swagger\Client\Model\Body28 | Created webhook object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCardSubscribersJsonPost($token, $board_id, $list_id, $card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdCardSubscribersJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body28**](../Model/Body28.md)| Created webhook object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdChecklistsCheckListIdItemsItemIdConvertToCardJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdChecklistsCheckListIdItemsItemIdConvertToCardJsonPost($token, $board_id, $list_id, $card_id, $check_list_id, $item_id)

Convert item to card

Convert item to card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$check_list_id = 789; // int | Selected checkList ID
$item_id = 789; // int | Selected item Id

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdChecklistsCheckListIdItemsItemIdConvertToCardJsonPost($token, $board_id, $list_id, $card_id, $check_list_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdChecklistsCheckListIdItemsItemIdConvertToCardJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **check_list_id** | **int**| Selected checkList ID |
 **item_id** | **int**| Selected item Id |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdCopyJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdCopyJsonPost($token, $board_id, $list_id, $card_id, $body)

Copy card

Copy card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$body = new \Swagger\Client\Model\Body32(); // \Swagger\Client\Model\Body32 | Copy card

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCopyJsonPost($token, $board_id, $list_id, $card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdCopyJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body32**](../Model/Body32.md)| Copy card |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdJsonDelete($token, $board_id, $list_id, $card_id)

Deletes the card



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Board ID to delete
$list_id = 789; // int | list ID to delete
$card_id = 789; // int | card ID to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdJsonDelete($token, $board_id, $list_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Board ID to delete |
 **list_id** | **int**| list ID to delete |
 **card_id** | **int**| card ID to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdJsonGet**
> object v1BoardsBoardIdListsListIdCardsCardIdJsonGet($token, $board_id, $list_id, $card_id)

Cards



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdJsonGet($token, $board_id, $list_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdListsListIdCardsCardIdJsonPut**
> object v1BoardsBoardIdListsListIdCardsCardIdJsonPut($token, $board_id, $list_id, $card_id, $body)

Edit card

Update the Card details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | Edit card

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdJsonPut($token, $board_id, $list_id, $card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdJsonPut: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)| Edit card |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdSearchJsonGet**
> object v1BoardsBoardIdListsListIdCardsCardIdSearchJsonGet($token, $board_id, $list_id, $card_id)

cards by listID

Returns Card details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdSearchJsonGet($token, $board_id, $list_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdSearchJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonDelete($token, $board_id, $list_id, $card_id, $user_id)

Deletes a cardUser



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$list_id = 789; // int | list id to delete
$card_id = 789; // int | card id to delete
$user_id = 789; // int | User id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonDelete($token, $board_id, $list_id, $card_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |
 **list_id** | **int**| list id to delete |
 **card_id** | **int**| card id to delete |
 **user_id** | **int**| User id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonPost($token, $board_id, $list_id, $card_id, $user_id, $body)

Assign member to card

Assign member to card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID
$user_id = 789; // int | Selected user ID
$body = new \Swagger\Client\Model\Body31(); // \Swagger\Client\Model\Body31 | Assign member to card

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonPost($token, $board_id, $list_id, $card_id, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsCardIdUsersUserIdJsonPost: ', $e->getMessage(), PHP_EOL;
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
 **user_id** | **int**| Selected user ID |
 **body** | [**\Swagger\Client\Model\Body31**](../Model/Body31.md)| Assign member to card |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsJsonGet**
> object v1BoardsBoardIdListsListIdCardsJsonGet($token, $board_id, $list_id)

View list cards of the board

View list cards of the board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsJsonGet($token, $board_id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |
 **list_id** | **int**| Selected list ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsJsonPost**
> object v1BoardsBoardIdListsListIdCardsJsonPost($token, $board_id, $list_id, $body)

Add a new card



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$body = new \Swagger\Client\Model\Body11(); // \Swagger\Client\Model\Body11 | Created card object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsJsonPost($token, $board_id, $list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |
 **list_id** | **int**| Selected list ID |
 **body** | [**\Swagger\Client\Model\Body11**](../Model/Body11.md)| Created card object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsJsonPut**
> object v1BoardsBoardIdListsListIdCardsJsonPut($token, $board_id, $list_id, $body)

Move list cards



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | Created card object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsJsonPut($token, $board_id, $list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1BoardsBoardIdListsListIdCardsJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |
 **list_id** | **int**| Selected list ID |
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)| Created card object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdCardsJsonGet**
> object v1UsersUserIdCardsJsonGet($token, $user_id)

View user cards

View user cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Selected user ID

try {
    $result = $apiInstance->v1UsersUserIdCardsJsonGet($token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->v1UsersUserIdCardsJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| Selected user ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

