# Swagger\Client\GroupsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1GroupsGroupIdJsonDelete**](GroupsApi.md#v1GroupsGroupIdJsonDelete) | **DELETE** /v1/groups/{groupId}.json | delete groups
[**v1GroupsGroupIdJsonGet**](GroupsApi.md#v1GroupsGroupIdJsonGet) | **GET** /v1/groups/{groupId}.json | Put groups
[**v1GroupsGroupIdJsonPut**](GroupsApi.md#v1GroupsGroupIdJsonPut) | **PUT** /v1/groups/{groupId}.json | Put groups
[**v1GroupsGroupIdUsersUserIdJsonDelete**](GroupsApi.md#v1GroupsGroupIdUsersUserIdJsonDelete) | **DELETE** /v1/groups/{groupId}/users/{userId}.json | Put groups
[**v1GroupsJsonGet**](GroupsApi.md#v1GroupsJsonGet) | **GET** /v1/groups.json | Add a new groups to the card
[**v1GroupsJsonPost**](GroupsApi.md#v1GroupsJsonPost) | **POST** /v1/groups.json | Add a new groups to the card
[**v1GroupsUsersJsonPost**](GroupsApi.md#v1GroupsUsersJsonPost) | **POST** /v1/groups_users.json | View groups_users


# **v1GroupsGroupIdJsonDelete**
> object v1GroupsGroupIdJsonDelete($token, $group_id)

delete groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$group_id = 789; // int | ID of groups that needs to be fetched

try {
    $result = $apiInstance->v1GroupsGroupIdJsonDelete($token, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsGroupIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **group_id** | **int**| ID of groups that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GroupsGroupIdJsonGet**
> object v1GroupsGroupIdJsonGet($token, $group_id)

Put groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$group_id = 789; // int | ID of groups that needs to be fetched

try {
    $result = $apiInstance->v1GroupsGroupIdJsonGet($token, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsGroupIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **group_id** | **int**| ID of groups that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GroupsGroupIdJsonPut**
> object v1GroupsGroupIdJsonPut($token, $group_id, $body)

Put groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$group_id = 789; // int | ID of groups that needs to be fetched
$body = new \Swagger\Client\Model\Body51(); // \Swagger\Client\Model\Body51 | Created comment object

try {
    $result = $apiInstance->v1GroupsGroupIdJsonPut($token, $group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsGroupIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **group_id** | **int**| ID of groups that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body51**](../Model/Body51.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GroupsGroupIdUsersUserIdJsonDelete**
> object v1GroupsGroupIdUsersUserIdJsonDelete($token, $user_id, $group_id)

Put groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | ID of userId that needs to be fetched
$group_id = 789; // int | ID of groups that needs to be fetched

try {
    $result = $apiInstance->v1GroupsGroupIdUsersUserIdJsonDelete($token, $user_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsGroupIdUsersUserIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| ID of userId that needs to be fetched |
 **group_id** | **int**| ID of groups that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GroupsJsonGet**
> object v1GroupsJsonGet($token)

Add a new groups to the card

Created groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1GroupsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1GroupsJsonPost**
> object v1GroupsJsonPost($token, $body)

Add a new groups to the card

Created groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body50(); // \Swagger\Client\Model\Body50 | Created comment object

try {
    $result = $apiInstance->v1GroupsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body50**](../Model/Body50.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1GroupsUsersJsonPost**
> object v1GroupsUsersJsonPost($token, $body)

View groups_users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body52(); // \Swagger\Client\Model\Body52 | Created comment object

try {
    $result = $apiInstance->v1GroupsUsersJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->v1GroupsUsersJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body52**](../Model/Body52.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

