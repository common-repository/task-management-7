# Swagger\Client\OrganizationsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BoardsBoardIdListsListIdCardsCardIdCardsUsersCardUserIdJsonDelete**](OrganizationsApi.md#v1BoardsBoardIdListsListIdCardsCardIdCardsUsersCardUserIdJsonDelete) | **DELETE** /v1/boards/{boardId}/lists/{listId}/cards/{cardId}/cards_users/{cardUserId}.json | Deletes a cardUser
[**v1OrganizationsJsonGet**](OrganizationsApi.md#v1OrganizationsJsonGet) | **GET** /v1/organizations.json | Finds organizations by tags
[**v1OrganizationsJsonPost**](OrganizationsApi.md#v1OrganizationsJsonPost) | **POST** /v1/organizations.json | Add a new organizations to the store
[**v1OrganizationsOrganizationIdJsonDelete**](OrganizationsApi.md#v1OrganizationsOrganizationIdJsonDelete) | **DELETE** /v1/organizations/{organizationId}.json | Deletes a organization
[**v1OrganizationsOrganizationIdJsonGet**](OrganizationsApi.md#v1OrganizationsOrganizationIdJsonGet) | **GET** /v1/organizations/{organizationId}.json | Find organizations by userId
[**v1OrganizationsOrganizationIdJsonPut**](OrganizationsApi.md#v1OrganizationsOrganizationIdJsonPut) | **PUT** /v1/organizations/{organizationId}.json | Update an existing organizations
[**v1OrganizationsOrganizationIdOrganizationsUsersOrganizationUserIdJsonDelete**](OrganizationsApi.md#v1OrganizationsOrganizationIdOrganizationsUsersOrganizationUserIdJsonDelete) | **DELETE** /v1/organizations/{organizationId}/organizations_users/{organizationUserId}.json | Deletes a organizationUser
[**v1OrganizationsOrganizationIdUploadLogoJsonPost**](OrganizationsApi.md#v1OrganizationsOrganizationIdUploadLogoJsonPost) | **POST** /v1/organizations/{organizationId}/upload_logo.json | Add a new organizations to the store
[**v1OrganizationsOrganizationIdUsersUserIdJsonPost**](OrganizationsApi.md#v1OrganizationsOrganizationIdUsersUserIdJsonPost) | **POST** /v1/organizations/{organizationId}/users/{userId}.json | Added users for organizations
[**v1OrganizationsUsersOrganizationUserIdJsonPut**](OrganizationsApi.md#v1OrganizationsUsersOrganizationUserIdJsonPut) | **PUT** /v1/organizations_users/{organizationUserId}.json | Update an existing organizationUser


# **v1BoardsBoardIdListsListIdCardsCardIdCardsUsersCardUserIdJsonDelete**
> object v1BoardsBoardIdListsListIdCardsCardIdCardsUsersCardUserIdJsonDelete($token, $board_id, $list_id, $card_id, $card_user_id)

Deletes a cardUser



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$board_id = 789; // int | board id to delete
$list_id = 789; // int | list id to delete
$card_id = 789; // int | card id to delete
$card_user_id = 789; // int | cardUser id to delete

try {
    $result = $apiInstance->v1BoardsBoardIdListsListIdCardsCardIdCardsUsersCardUserIdJsonDelete($token, $board_id, $list_id, $card_id, $card_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1BoardsBoardIdListsListIdCardsCardIdCardsUsersCardUserIdJsonDelete: ', $e->getMessage(), PHP_EOL;
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
 **card_user_id** | **int**| cardUser id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsJsonGet**
> object v1OrganizationsJsonGet($token)

Finds organizations by tags

Returns organization list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1OrganizationsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1OrganizationsJsonPost**
> object v1OrganizationsJsonPost($token, $body)

Add a new organizations to the store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | Created Organization object

try {
    $result = $apiInstance->v1OrganizationsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)| Created Organization object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdJsonDelete**
> object v1OrganizationsOrganizationIdJsonDelete($token, $organization_id)

Deletes a organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_id = 789; // int | hook id to delete

try {
    $result = $apiInstance->v1OrganizationsOrganizationIdJsonDelete($token, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_id** | **int**| hook id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdJsonGet**
> object v1OrganizationsOrganizationIdJsonGet($token, $organization_id)

Find organizations by userId

Returns a organizations based on organizationsID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_id = 789; // int | Selected organization Id

try {
    $result = $apiInstance->v1OrganizationsOrganizationIdJsonGet($token, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_id** | **int**| Selected organization Id |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdJsonPut**
> object v1OrganizationsOrganizationIdJsonPut($token, $organization_id, $body)

Update an existing organizations

Update the Organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_id = 789; // int | Organization id to update
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | Created webhook object

try {
    $result = $apiInstance->v1OrganizationsOrganizationIdJsonPut($token, $organization_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_id** | **int**| Organization id to update |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)| Created webhook object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdOrganizationsUsersOrganizationUserIdJsonDelete**
> object v1OrganizationsOrganizationIdOrganizationsUsersOrganizationUserIdJsonDelete($token, $organization_id, $organization_user_id)

Deletes a organizationUser



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_id = 789; // int | organization id to delete
$organization_user_id = 789; // int | organizationUser id to delete

try {
    $result = $apiInstance->v1OrganizationsOrganizationIdOrganizationsUsersOrganizationUserIdJsonDelete($token, $organization_id, $organization_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdOrganizationsUsersOrganizationUserIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_id** | **int**| organization id to delete |
 **organization_user_id** | **int**| organizationUser id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdUploadLogoJsonPost**
> object v1OrganizationsOrganizationIdUploadLogoJsonPost($token, $organization_id)

Add a new organizations to the store

Upload logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_id = 789; // int | Organization id to update

try {
    $result = $apiInstance->v1OrganizationsOrganizationIdUploadLogoJsonPost($token, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdUploadLogoJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_id** | **int**| Organization id to update |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdUsersUserIdJsonPost**
> object v1OrganizationsOrganizationIdUsersUserIdJsonPost($token, $organization_id, $user_id)

Added users for organizations

Added user the Organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_id = 789; // int | Organization id to post
$user_id = 789; // int | UserId id to post

try {
    $result = $apiInstance->v1OrganizationsOrganizationIdUsersUserIdJsonPost($token, $organization_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdUsersUserIdJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_id** | **int**| Organization id to post |
 **user_id** | **int**| UserId id to post |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsUsersOrganizationUserIdJsonPut**
> object v1OrganizationsUsersOrganizationUserIdJsonPut($token, $organization_user_id, $body)

Update an existing organizationUser

Update the organizationUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$organization_user_id = 789; // int | Organization ID to get listing
$body = new \Swagger\Client\Model\Body43(); // \Swagger\Client\Model\Body43 | Change Member Permission

try {
    $result = $apiInstance->v1OrganizationsUsersOrganizationUserIdJsonPut($token, $organization_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsUsersOrganizationUserIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **organization_user_id** | **int**| Organization ID to get listing |
 **body** | [**\Swagger\Client\Model\Body43**](../Model/Body43.md)| Change Member Permission |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

