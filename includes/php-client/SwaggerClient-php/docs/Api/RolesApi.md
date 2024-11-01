# Swagger\Client\RolesApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1RolesJsonPost**](RolesApi.md#v1RolesJsonPost) | **POST** /v1/roles.json | Add a new role to the store
[**v1RolesRoleIdJsonDelete**](RolesApi.md#v1RolesRoleIdJsonDelete) | **DELETE** /v1/roles/{roleId}.json | Deletes a webhook
[**v1RolesRoleIdJsonPut**](RolesApi.md#v1RolesRoleIdJsonPut) | **PUT** /v1/roles/{roleId}.json | Updating a Role


# **v1RolesJsonPost**
> object v1RolesJsonPost($token, $body)

Add a new role to the store

Created a role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body34(); // \Swagger\Client\Model\Body34 | Created Role object

try {
    $result = $apiInstance->v1RolesJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->v1RolesJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body34**](../Model/Body34.md)| Created Role object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RolesRoleIdJsonDelete**
> object v1RolesRoleIdJsonDelete($token, $role_id)

Deletes a webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$role_id = 789; // int | role id to delete

try {
    $result = $apiInstance->v1RolesRoleIdJsonDelete($token, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->v1RolesRoleIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **role_id** | **int**| role id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RolesRoleIdJsonPut**
> object v1RolesRoleIdJsonPut($token, $role_id, $body)

Updating a Role

Update a role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$role_id = 789; // int | Role id to update
$body = new \Swagger\Client\Model\Body45(); // \Swagger\Client\Model\Body45 | Edit Role

try {
    $result = $apiInstance->v1RolesRoleIdJsonPut($token, $role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->v1RolesRoleIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **role_id** | **int**| Role id to update |
 **body** | [**\Swagger\Client\Model\Body45**](../Model/Body45.md)| Edit Role |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

