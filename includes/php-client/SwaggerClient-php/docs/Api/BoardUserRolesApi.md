# Swagger\Client\BoardUserRolesApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardUserRolesBoardUserRoleIdJsonDelete**](BoardUserRolesApi.md#v1BoardUserRolesBoardUserRoleIdJsonDelete) | **DELETE** /v1/board_user_roles/{boardUserRoleId}.json | Deletes a webhook
[**v1BoardUserRolesBoardUserRoleIdJsonPut**](BoardUserRolesApi.md#v1BoardUserRolesBoardUserRoleIdJsonPut) | **PUT** /v1/board_user_roles/{boardUserRoleId}.json | Edit board user role
[**v1BoardUserRolesJsonPost**](BoardUserRolesApi.md#v1BoardUserRolesJsonPost) | **POST** /v1/board_user_roles.json | Add a board user roles


# **v1BoardUserRolesBoardUserRoleIdJsonDelete**
> object v1BoardUserRolesBoardUserRoleIdJsonDelete($token, $board_user_role_id)

Deletes a webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardUserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_user_role_id = 789; // int | board user id to delete

try {
    $result = $apiInstance->v1BoardUserRolesBoardUserRoleIdJsonDelete($token, $board_user_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardUserRolesApi->v1BoardUserRolesBoardUserRoleIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_user_role_id** | **int**| board user id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardUserRolesBoardUserRoleIdJsonPut**
> object v1BoardUserRolesBoardUserRoleIdJsonPut($token, $board_user_role_id, $body)

Edit board user role

Update the board user role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardUserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_user_role_id = 789; // int | Board user role to edit
$body = new \Swagger\Client\Model\Body46(); // \Swagger\Client\Model\Body46 | Edit edit board user role object

try {
    $result = $apiInstance->v1BoardUserRolesBoardUserRoleIdJsonPut($token, $board_user_role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardUserRolesApi->v1BoardUserRolesBoardUserRoleIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **board_user_role_id** | **int**| Board user role to edit |
 **body** | [**\Swagger\Client\Model\Body46**](../Model/Body46.md)| Edit edit board user role object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BoardUserRolesJsonPost**
> v1BoardUserRolesJsonPost($token, $body)

Add a board user roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardUserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body35(); // \Swagger\Client\Model\Body35 | Created board user role object

try {
    $apiInstance->v1BoardUserRolesJsonPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling BoardUserRolesApi->v1BoardUserRolesJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body35**](../Model/Body35.md)| Created board user role object |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

