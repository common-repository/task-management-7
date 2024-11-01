# Swagger\Client\OrganizationUserRolesApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OrganizationUserRolesJsonPost**](OrganizationUserRolesApi.md#v1OrganizationUserRolesJsonPost) | **POST** /v1/organization_user_roles.json | Add a new organization user roles
[**v1OrganizationUserRolesOrganizationUserRoleIdJsonDelete**](OrganizationUserRolesApi.md#v1OrganizationUserRolesOrganizationUserRoleIdJsonDelete) | **DELETE** /v1/organization_user_roles/{organizationUserRoleId}.json | Deletes a webhook
[**v1OrganizationUserRolesOrganizationUserRoleIdPut**](OrganizationUserRolesApi.md#v1OrganizationUserRolesOrganizationUserRoleIdPut) | **PUT** /v1/organization_user_roles/{organizationUserRoleId} | Updating a organization user roles


# **v1OrganizationUserRolesJsonPost**
> object v1OrganizationUserRolesJsonPost($token, $body)

Add a new organization user roles

Created a organization user roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationUserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body36(); // \Swagger\Client\Model\Body36 | Created organization user role object

try {
    $result = $apiInstance->v1OrganizationUserRolesJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationUserRolesApi->v1OrganizationUserRolesJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body36**](../Model/Body36.md)| Created organization user role object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationUserRolesOrganizationUserRoleIdJsonDelete**
> object v1OrganizationUserRolesOrganizationUserRoleIdJsonDelete($token, $organization_user_role_id)

Deletes a webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationUserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_user_role_id = 789; // int | organizationUser id to delete

try {
    $result = $apiInstance->v1OrganizationUserRolesOrganizationUserRoleIdJsonDelete($token, $organization_user_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationUserRolesApi->v1OrganizationUserRolesOrganizationUserRoleIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_user_role_id** | **int**| organizationUser id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationUserRolesOrganizationUserRoleIdPut**
> object v1OrganizationUserRolesOrganizationUserRoleIdPut($token, $organization_user_role_id, $body)

Updating a organization user roles

Update a organization user roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationUserRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_user_role_id = 789; // int | Organization User Role Id to update
$body = new \Swagger\Client\Model\Body47(); // \Swagger\Client\Model\Body47 | Organization User Role Object

try {
    $result = $apiInstance->v1OrganizationUserRolesOrganizationUserRoleIdPut($token, $organization_user_role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationUserRolesApi->v1OrganizationUserRolesOrganizationUserRoleIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_user_role_id** | **int**| Organization User Role Id to update |
 **body** | [**\Swagger\Client\Model\Body47**](../Model/Body47.md)| Organization User Role Object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

