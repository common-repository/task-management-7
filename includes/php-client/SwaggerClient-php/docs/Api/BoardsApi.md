# Swagger\Client\BoardsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdActivitiesJsonGet**](BoardsApi.md#v1BoardsBoardIdActivitiesJsonGet) | **GET** /v1/boards/{boardId}/activities.json | Activities
[**v1BoardsBoardIdBoardSubscribersBoardSubscriberIdJsonPut**](BoardsApi.md#v1BoardsBoardIdBoardSubscribersBoardSubscriberIdJsonPut) | **PUT** /v1/boards/{boardId}/board_subscribers/{boardSubscriberId}.json | Update an existing webhooks
[**v1BoardsBoardIdBoardSubscribersJsonGet**](BoardsApi.md#v1BoardsBoardIdBoardSubscribersJsonGet) | **GET** /v1/boards/{boardId}/board_subscribers.json | listing the board Subscribers
[**v1BoardsBoardIdBoardSubscribersJsonPost**](BoardsApi.md#v1BoardsBoardIdBoardSubscribersJsonPost) | **POST** /v1/boards/{boardId}/board_subscribers.json | Add subscriber to Board
[**v1BoardsBoardIdBoardsStarsJsonGet**](BoardsApi.md#v1BoardsBoardIdBoardsStarsJsonGet) | **GET** /v1/boards/{boardId}/boards_stars.json | Board stars
[**v1BoardsBoardIdBoardsStarsJsonPost**](BoardsApi.md#v1BoardsBoardIdBoardsStarsJsonPost) | **POST** /v1/boards/{boardId}/boards_stars.json | Star board
[**v1BoardsBoardIdBoardsUsersBoardUserIdDelete**](BoardsApi.md#v1BoardsBoardIdBoardsUsersBoardUserIdDelete) | **DELETE** /v1/boards/{boardId}/boards_users/{boardUserId} | Deletes a organizationUser
[**v1BoardsBoardIdChatHistoryJsonGet**](BoardsApi.md#v1BoardsBoardIdChatHistoryJsonGet) | **GET** /v1/boards/{boardId}/chat_history.json | View board chat history
[**v1BoardsBoardIdCopyJsonPost**](BoardsApi.md#v1BoardsBoardIdCopyJsonPost) | **POST** /v1/boards/{boardId}/copy.json | Copy board
[**v1BoardsBoardIdCustomBackgroundsJsonPost**](BoardsApi.md#v1BoardsBoardIdCustomBackgroundsJsonPost) | **POST** /v1/boards/{boardId}/custom_backgrounds.json | Upload custom background to board
[**v1BoardsBoardIdJsonDelete**](BoardsApi.md#v1BoardsBoardIdJsonDelete) | **DELETE** /v1/boards/{boardId}.json | Deletes the board
[**v1BoardsBoardIdJsonGet**](BoardsApi.md#v1BoardsBoardIdJsonGet) | **GET** /v1/boards/{boardId}.json | View board
[**v1BoardsBoardIdJsonPut**](BoardsApi.md#v1BoardsBoardIdJsonPut) | **PUT** /v1/boards/{boardId}.json | Edit board
[**v1BoardsBoardIdLabelsLabelIdJsonDelete**](BoardsApi.md#v1BoardsBoardIdLabelsLabelIdJsonDelete) | **DELETE** /v1/boards/{boardId}/labels/{labelId}.json | Delete the label
[**v1BoardsBoardIdUsersJsonPost**](BoardsApi.md#v1BoardsBoardIdUsersJsonPost) | **POST** /v1/boards/{boardId}/users.json | Add Board Member
[**v1BoardsBoardIdVisibilityJsonGet**](BoardsApi.md#v1BoardsBoardIdVisibilityJsonGet) | **GET** /v1/boards/{boardId}/visibility.json | View board visibility
[**v1BoardsBulkActionJsonPost**](BoardsApi.md#v1BoardsBulkActionJsonPost) | **POST** /v1/boards/bulk_action.json | Bulk action
[**v1BoardsJsonGet**](BoardsApi.md#v1BoardsJsonGet) | **GET** /v1/boards.json | Find Board by userId
[**v1BoardsJsonPost**](BoardsApi.md#v1BoardsJsonPost) | **POST** /v1/boards.json | Add a new board
[**v1BoardsListJsonGet**](BoardsApi.md#v1BoardsListJsonGet) | **GET** /v1/boards/list.json | List boards
[**v1BoardsSearchJsonGet**](BoardsApi.md#v1BoardsSearchJsonGet) | **GET** /v1/boards/search.json | Get Board by Name
[**v1BoardsUsersBoardUserIdJsonPut**](BoardsApi.md#v1BoardsUsersBoardUserIdJsonPut) | **PUT** /v1/boards_users/{boardUserId}.json | Update board member permissions
[**v1SearchJsonGet**](BoardsApi.md#v1SearchJsonGet) | **GET** /v1/search.json | Elastic search
[**v1UsersUserIdBoardsJsonGet**](BoardsApi.md#v1UsersUserIdBoardsJsonGet) | **GET** /v1/users/{userId}/boards.json | Get User boards
[**v1WorkflowTemplatesJsonGet**](BoardsApi.md#v1WorkflowTemplatesJsonGet) | **GET** /v1/workflow_templates.json | 


# **v1BoardsBoardIdActivitiesJsonGet**
> object v1BoardsBoardIdActivitiesJsonGet($token, $board_id)

Activities

Returns Board Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID

try {
    $result = $apiInstance->v1BoardsBoardIdActivitiesJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdActivitiesJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdBoardSubscribersBoardSubscriberIdJsonPut**
> object v1BoardsBoardIdBoardSubscribersBoardSubscriberIdJsonPut($token, $board_id, $board_subscriber_id)

Update an existing webhooks

Update the webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs Unsubscribe from the Board
$board_subscriber_id = 789; // int | ID of User that needs to Unsubscribe from the Board

try {
    $result = $apiInstance->v1BoardsBoardIdBoardSubscribersBoardSubscriberIdJsonPut($token, $board_id, $board_subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdBoardSubscribersBoardSubscriberIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs Unsubscribe from the Board |
 **board_subscriber_id** | **int**| ID of User that needs to Unsubscribe from the Board |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdBoardSubscribersJsonGet**
> object v1BoardsBoardIdBoardSubscribersJsonGet($token, $board_id)

listing the board Subscribers

listing the board Subscribers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs to be fetched

try {
    $result = $apiInstance->v1BoardsBoardIdBoardSubscribersJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdBoardSubscribersJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdBoardSubscribersJsonPost**
> object v1BoardsBoardIdBoardSubscribersJsonPost($token, $board_id)

Add subscriber to Board

Add subscriber to Board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs add Subscriber into the Board

try {
    $result = $apiInstance->v1BoardsBoardIdBoardSubscribersJsonPost($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdBoardSubscribersJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs add Subscriber into the Board |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdBoardsStarsJsonGet**
> object v1BoardsBoardIdBoardsStarsJsonGet($token, $board_id)

Board stars

.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID

try {
    $result = $apiInstance->v1BoardsBoardIdBoardsStarsJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdBoardsStarsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdBoardsStarsJsonPost**
> object v1BoardsBoardIdBoardsStarsJsonPost($token, $board_id, $body)

Star board

Star board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs add Subscriber into the Board
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | Star board

try {
    $result = $apiInstance->v1BoardsBoardIdBoardsStarsJsonPost($token, $board_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdBoardsStarsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs add Subscriber into the Board |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)| Star board |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdBoardsUsersBoardUserIdDelete**
> object v1BoardsBoardIdBoardsUsersBoardUserIdDelete($token, $board_id, $board_user_id)

Deletes a organizationUser



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$board_user_id = 789; // int | boardUser id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdBoardsUsersBoardUserIdDelete($token, $board_id, $board_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdBoardsUsersBoardUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |
 **board_user_id** | **int**| boardUser id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdChatHistoryJsonGet**
> object v1BoardsBoardIdChatHistoryJsonGet($token, $board_id)

View board chat history

Returns a Board based on ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID

try {
    $result = $apiInstance->v1BoardsBoardIdChatHistoryJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdChatHistoryJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdCopyJsonPost**
> v1BoardsBoardIdCopyJsonPost($token, $board_id, $body)

Copy board

Copy board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs add Subscriber into the Board
$body = new \Swagger\Client\Model\Body24(); // \Swagger\Client\Model\Body24 | Copy board

try {
    $apiInstance->v1BoardsBoardIdCopyJsonPost($token, $board_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdCopyJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs add Subscriber into the Board |
 **body** | [**\Swagger\Client\Model\Body24**](../Model/Body24.md)| Copy board |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdCustomBackgroundsJsonPost**
> v1BoardsBoardIdCustomBackgroundsJsonPost($token, $board_id)

Upload custom background to board



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs add Subscriber into the Board

try {
    $apiInstance->v1BoardsBoardIdCustomBackgroundsJsonPost($token, $board_id);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdCustomBackgroundsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs add Subscriber into the Board |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdJsonDelete**
> object v1BoardsBoardIdJsonDelete($token, $board_id)

Deletes the board



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs to be fetched

try {
    $result = $apiInstance->v1BoardsBoardIdJsonDelete($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdJsonGet**
> object v1BoardsBoardIdJsonGet($token, $board_id)

View board

Returns a Board based on ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | Selected board ID

try {
    $result = $apiInstance->v1BoardsBoardIdJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BoardsBoardIdJsonPut**
> object v1BoardsBoardIdJsonPut($token, $board_id, $body)

Edit board

Update the board details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs to be fetched
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | Edit board

try {
    $result = $apiInstance->v1BoardsBoardIdJsonPut($token, $board_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)| Edit board |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdLabelsLabelIdJsonDelete**
> object v1BoardsBoardIdLabelsLabelIdJsonDelete($token, $board_id, $label_id)

Delete the label



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$label_id = 789; // int | label id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdLabelsLabelIdJsonDelete($token, $board_id, $label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdLabelsLabelIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| board id to delete |
 **label_id** | **int**| label id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdUsersJsonPost**
> v1BoardsBoardIdUsersJsonPost($token, $board_id, $body)

Add Board Member



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs add Subscriber into the Board
$body = new \Swagger\Client\Model\Body25(); // \Swagger\Client\Model\Body25 | Add Board Member

try {
    $apiInstance->v1BoardsBoardIdUsersJsonPost($token, $board_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdUsersJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs add Subscriber into the Board |
 **body** | [**\Swagger\Client\Model\Body25**](../Model/Body25.md)| Add Board Member |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBoardIdVisibilityJsonGet**
> object v1BoardsBoardIdVisibilityJsonGet($token, $board_id)

View board visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | ID of Board that needs to be fetched

try {
    $result = $apiInstance->v1BoardsBoardIdVisibilityJsonGet($token, $board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBoardIdVisibilityJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_id** | **int**| ID of Board that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsBulkActionJsonPost**
> object v1BoardsBulkActionJsonPost($token, $body)

Bulk action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | Bulk action

try {
    $result = $apiInstance->v1BoardsBulkActionJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsBulkActionJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body18**](../Model/Body18.md)| Bulk action |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsJsonGet**
> object v1BoardsJsonGet($token)

Find Board by userId

Returns a Board based on userID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1BoardsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsJsonPost**
> object v1BoardsJsonPost($token, $body)

Add a new board



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | Created Board

try {
    $result = $apiInstance->v1BoardsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)| Created Board |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsListJsonGet**
> object v1BoardsListJsonGet($token, $type)

List boards

Returns a Board List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$type = "type_example"; // string | User name to fetch Users

try {
    $result = $apiInstance->v1BoardsListJsonGet($token, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsListJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **type** | **string**| User name to fetch Users | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsSearchJsonGet**
> object v1BoardsSearchJsonGet($token, $q)

Get Board by Name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$q = "q_example"; // string | Board name to fetch Users

try {
    $result = $apiInstance->v1BoardsSearchJsonGet($token, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsSearchJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **q** | **string**| Board name to fetch Users | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardsUsersBoardUserIdJsonPut**
> object v1BoardsUsersBoardUserIdJsonPut($token, $board_user_id)

Update board member permissions

Update board member permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_user_id = 789; // int | ID of Board user that needs to be update

try {
    $result = $apiInstance->v1BoardsUsersBoardUserIdJsonPut($token, $board_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1BoardsUsersBoardUserIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_user_id** | **int**| ID of Board user that needs to be update |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SearchJsonGet**
> object v1SearchJsonGet($token, $q)

Elastic search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$q = "q_example"; // string | board name to fetch

try {
    $result = $apiInstance->v1SearchJsonGet($token, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1SearchJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **q** | **string**| board name to fetch | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdBoardsJsonGet**
> object v1UsersUserIdBoardsJsonGet($token, $user_id)

Get User boards



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Selected User ID

try {
    $result = $apiInstance->v1UsersUserIdBoardsJsonGet($token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1UsersUserIdBoardsJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| Selected User ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WorkflowTemplatesJsonGet**
> object v1WorkflowTemplatesJsonGet($token)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1WorkflowTemplatesJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->v1WorkflowTemplatesJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

