# Swagger\Client\CardVotersApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdCardVotersCardVoterIdJsonDelete**](CardVotersApi.md#v1BoardsBoardIdListsListIdCardsCardIdCardVotersCardVoterIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/card_voters/{cardVoterId}.json | Deletes a cardVoter
[**v1BoardsBoardIdListsListIdCardsCardIdCardVotersJsonPost**](CardVotersApi.md#v1BoardsBoardIdListsListIdCardsCardIdCardVotersJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/card_voters.json | Add a new card_voters


# **v1BoardsBoardIdListsListIdCardsCardIdCardVotersCardVoterIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdCardVotersCardVoterIdJsonDelete($token, $board_id, $list_id, $card_id, $card_voter_id)

Deletes a cardVoter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardVotersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | boardId to delete
$list_id = 789; // int | listId to delete
$card_id = 789; // int | cardId to delete
$card_voter_id = 789; // int | cardVoterId to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCardVotersCardVoterIdJsonDelete($token, $board_id, $list_id, $card_id, $card_voter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardVotersApi->v1BoardsBoardIdListsListIdCardsCardIdCardVotersCardVoterIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| boardId to delete |
 **list_id** | **int**| listId to delete |
 **card_id** | **int**| cardId to delete |
 **card_voter_id** | **int**| cardVoterId to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdCardsCardIdCardVotersJsonPost**
> object v1BoardsBoardIdListsListIdCardsCardIdCardVotersJsonPost($token, $board_id, $list_id, $card_id)

Add a new card_voters

Created card_voters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardVotersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$card_id = 789; // int | Selected card ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCardVotersJsonPost($token, $board_id, $list_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardVotersApi->v1BoardsBoardIdListsListIdCardsCardIdCardVotersJsonPost: ', $e->getMessage(), PHP_EOL;
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

