# Swagger\Client\ListsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsJsonDelete**](ListsApi.md#v1BoardsBoardIdListsJsonDelete) | **DELETE** /v1/boards/{boardId}/lists.json | Deletes a list
[**v1BoardsBoardIdListsJsonGet**](ListsApi.md#v1BoardsBoardIdListsJsonGet) | **GET** /v1/boards/{boardId}/lists.json | View board by ID
[**v1BoardsBoardIdListsJsonPost**](ListsApi.md#v1BoardsBoardIdListsJsonPost) | **POST** /v1/boards/{boardId}/lists.json | Add a new list to the board
[**v1BoardsBoardIdListsListIdActivitiesJsonGet**](ListsApi.md#v1BoardsBoardIdListsListIdActivitiesJsonGet) | **GET** /v1/boards/{boardId}/lists/{listId}/activities.json | Activities
[**v1BoardsBoardIdListsListIdJsonDelete**](ListsApi.md#v1BoardsBoardIdListsListIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}.json | Deletes a list
[**v1BoardsBoardIdListsListIdJsonPut**](ListsApi.md#v1BoardsBoardIdListsListIdJsonPut) | **PUT** /v1/boards/{boardId}/lists/{listId}.json | Update an existing webhooks
[**v1BoardsBoardIdListsListIdListSubscribersJsonPost**](ListsApi.md#v1BoardsBoardIdListsListIdListSubscribersJsonPost) | **POST** /v1/boards/{boardId}/lists/{listId}/list_subscribers.json | Add a new list subcriber to the board
[**v1BoardsBoardIdListsListIdListSubscribersListSubscriberIdJsonPut**](ListsApi.md#v1BoardsBoardIdListsListIdListSubscribersListSubscriberIdJsonPut) | **PUT** /v1/boards/{boardId}/lists/{listId}/list_subscribers/{listSubscriberId}.json | Update an existing webhooks


# **v1BoardsBoardIdListsJsonDelete**
> object v1BoardsBoardIdListsJsonDelete($token, $board_id)

Deletes a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsJsonDelete($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsJsonDelete: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdListsJsonGet**
> object v1BoardsBoardIdListsJsonGet($token, $board_id)

View board by ID

Returns a Board based on ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsJsonGet: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsJsonPost**
> object v1BoardsBoardIdListsJsonPost($token, $board_id, $body)

Add a new list to the board

Created a List for board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | Created list object

try {
    $result = $apiInstance->v1BoardsBoardIdListsJsonPost($token, $board_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)| Created list object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdActivitiesJsonGet**
> object v1BoardsBoardIdListsListIdActivitiesJsonGet($token, $board_id, $list_id)

Activities

Returns list Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdActivitiesJsonGet($token, $board_id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsListIdActivitiesJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdListsListIdJsonDelete**
> object v1BoardsBoardIdListsListIdJsonDelete($token, $board_id, $list_id)

Deletes a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$list_id = 789; // int | list id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdJsonDelete($token, $board_id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsListIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |
 **list_id** | **int**| list id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdJsonPut**
> v1BoardsBoardIdListsListIdJsonPut($token, $board_id, $list_id, $body)

Update an existing webhooks

Update the webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to update
$list_id = 789; // int | list id to update
$body = new \Swagger\Client\Model\Body39(); // \Swagger\Client\Model\Body39 | Update list object

try {
    $apiInstance->v1BoardsBoardIdListsListIdJsonPut($token, $board_id, $list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsListIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to update |
 **list_id** | **int**| list id to update |
 **body** | [**\Swagger\Client\Model\Body39**](../Model/Body39.md)| Update list object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdListSubscribersJsonPost**
> object v1BoardsBoardIdListsListIdListSubscribersJsonPost($token, $board_id, $list_id, $body)

Add a new list subcriber to the board

Created a List subcriber for board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID
$list_id = 789; // int | Selected list ID
$body = new \Swagger\Client\Model\Body26(); // \Swagger\Client\Model\Body26 | Created list subcriber object

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdListSubscribersJsonPost($token, $board_id, $list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsListIdListSubscribersJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| Selected board ID |
 **list_id** | **int**| Selected list ID |
 **body** | [**\Swagger\Client\Model\Body26**](../Model/Body26.md)| Created list subcriber object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdListsListIdListSubscribersListSubscriberIdJsonPut**
> object v1BoardsBoardIdListsListIdListSubscribersListSubscriberIdJsonPut($token, $board_id, $list_id, $list_subscriber_id)

Update an existing webhooks

Update the webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to update
$list_id = 789; // int | list id to update
$list_subscriber_id = 789; // int | listSubscriber Id to update

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdListSubscribersListSubscriberIdJsonPut($token, $board_id, $list_id, $list_subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1BoardsBoardIdListsListIdListSubscribersListSubscriberIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to update |
 **list_id** | **int**| list id to update |
 **list_subscriber_id** | **int**| listSubscriber Id to update |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

