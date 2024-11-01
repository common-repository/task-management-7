# Swagger\Client\UsersApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OauthJsonGet**](UsersApi.md#v1OauthJsonGet) | **GET** /v1/oauth.json | Get Oauth token
[**v1OauthTokenJsonPost**](UsersApi.md#v1OauthTokenJsonPost) | **POST** /v1/oauth/token.json | Get token
[**v1UsersBulkActionJsonPost**](UsersApi.md#v1UsersBulkActionJsonPost) | **POST** /v1/users/bulk_action.json | Enter your Email, and we will send resetting your password.
[**v1UsersForgotpasswordJsonPost**](UsersApi.md#v1UsersForgotpasswordJsonPost) | **POST** /v1/users/forgotpassword.json | Enter your Email, and we will send resetting your password.
[**v1UsersImportJsonPost**](UsersApi.md#v1UsersImportJsonPost) | **POST** /v1/users/import.json | Import Users
[**v1UsersJsonGet**](UsersApi.md#v1UsersJsonGet) | **GET** /v1/users.json | users
[**v1UsersJsonPost**](UsersApi.md#v1UsersJsonPost) | **POST** /v1/users.json | Creates User
[**v1UsersLoginJsonPost**](UsersApi.md#v1UsersLoginJsonPost) | **POST** /v1/users/login.json | Logs user into the system
[**v1UsersLogoutJsonGet**](UsersApi.md#v1UsersLogoutJsonGet) | **GET** /v1/users/logout.json | Logs out current logged in user session
[**v1UsersMeJsonGet**](UsersApi.md#v1UsersMeJsonGet) | **GET** /v1/users/me.json | Fetch user
[**v1UsersRegisterJsonPost**](UsersApi.md#v1UsersRegisterJsonPost) | **POST** /v1/users/register.json | Creates User
[**v1UsersSearchJsonGet**](UsersApi.md#v1UsersSearchJsonGet) | **GET** /v1/users/search.json | Get User by Name
[**v1UsersUserIdActivationJsonPut**](UsersApi.md#v1UsersUserIdActivationJsonPut) | **PUT** /v1/users/{userId}/activation.json | User activation
[**v1UsersUserIdActivitiesJsonGet**](UsersApi.md#v1UsersUserIdActivitiesJsonGet) | **GET** /v1/users/{userId}/activities.json | Activities
[**v1UsersUserIdAdminchangepasswordJsonPost**](UsersApi.md#v1UsersUserIdAdminchangepasswordJsonPost) | **POST** /v1/users/{userId}/adminchangepassword.json | Change password
[**v1UsersUserIdChangepasswordJsonPost**](UsersApi.md#v1UsersUserIdChangepasswordJsonPost) | **POST** /v1/users/{userId}/changepassword.json | Edit user
[**v1UsersUserIdJsonDelete**](UsersApi.md#v1UsersUserIdJsonDelete) | **DELETE** /v1/users/{userId}.json | Deletes the user
[**v1UsersUserIdJsonGet**](UsersApi.md#v1UsersUserIdJsonGet) | **GET** /v1/users/{userId}.json | users
[**v1UsersUserIdJsonPut**](UsersApi.md#v1UsersUserIdJsonPut) | **PUT** /v1/users/{userId}.json | Edit user


# **v1OauthJsonGet**
> object v1OauthJsonGet()

Get Oauth token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1OauthJsonGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1OauthJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OauthTokenJsonPost**
> v1OauthTokenJsonPost($body)

Get token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body37(); // \Swagger\Client\Model\Body37 | oauthToken

try {
    $apiInstance->v1OauthTokenJsonPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1OauthTokenJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body37**](../Model/Body37.md)| oauthToken |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersBulkActionJsonPost**
> object v1UsersBulkActionJsonPost($token, $body)

Enter your Email, and we will send resetting your password.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body17(); // \Swagger\Client\Model\Body17 | Created list subcriber object

try {
    $result = $apiInstance->v1UsersBulkActionJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersBulkActionJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body17**](../Model/Body17.md)| Created list subcriber object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersForgotpasswordJsonPost**
> object v1UsersForgotpasswordJsonPost($token, $body)

Enter your Email, and we will send resetting your password.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body19(); // \Swagger\Client\Model\Body19 | Created list subcriber object

try {
    $result = $apiInstance->v1UsersForgotpasswordJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersForgotpasswordJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body19**](../Model/Body19.md)| Created list subcriber object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersImportJsonPost**
> object v1UsersImportJsonPost($token, $file)

Import Users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$file = "/path/to/file.txt"; // \SplFileObject | Upload File.

try {
    $result = $apiInstance->v1UsersImportJsonPost($token, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersImportJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **file** | **\SplFileObject**| Upload File. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersJsonGet**
> object v1UsersJsonGet($token)

users

Returns Users listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1UsersJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1UsersJsonPost**
> object v1UsersJsonPost($token, $body)

Creates User

Created User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | Created user object

try {
    $result = $apiInstance->v1UsersJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)| Created user object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersLoginJsonPost**
> object v1UsersLoginJsonPost($token, $body)

Logs user into the system



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body21(); // \Swagger\Client\Model\Body21 | Created Board

try {
    $result = $apiInstance->v1UsersLoginJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersLoginJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body21**](../Model/Body21.md)| Created Board |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersLogoutJsonGet**
> object v1UsersLogoutJsonGet($token)

Logs out current logged in user session

.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1UsersLogoutJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersLogoutJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1UsersMeJsonGet**
> object v1UsersMeJsonGet($token)

Fetch user

Returns Users listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1UsersMeJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersMeJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1UsersRegisterJsonPost**
> object v1UsersRegisterJsonPost($token, $body)

Creates User

Created Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body20(); // \Swagger\Client\Model\Body20 | Created user object

try {
    $result = $apiInstance->v1UsersRegisterJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersRegisterJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body20**](../Model/Body20.md)| Created user object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersSearchJsonGet**
> object v1UsersSearchJsonGet($token, $q)

Get User by Name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$q = "q_example"; // string | User name to fetch Users

try {
    $result = $apiInstance->v1UsersSearchJsonGet($token, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersSearchJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **q** | **string**| User name to fetch Users | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdActivationJsonPut**
> object v1UsersUserIdActivationJsonPut($token, $user_id)

User activation

Update the users details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Selected user ID

try {
    $result = $apiInstance->v1UsersUserIdActivationJsonPut($token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdActivationJsonPut: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdActivitiesJsonGet**
> object v1UsersUserIdActivitiesJsonGet($token, $user_id)

Activities

Returns User Activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Selected User ID

try {
    $result = $apiInstance->v1UsersUserIdActivitiesJsonGet($token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdActivitiesJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1UsersUserIdAdminchangepasswordJsonPost**
> object v1UsersUserIdAdminchangepasswordJsonPost($token, $user_id, $body)

Change password

Update the users details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | user ID
$body = new \Swagger\Client\Model\Body22(); // \Swagger\Client\Model\Body22 | Change Password user object

try {
    $result = $apiInstance->v1UsersUserIdAdminchangepasswordJsonPost($token, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdAdminchangepasswordJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| user ID |
 **body** | [**\Swagger\Client\Model\Body22**](../Model/Body22.md)| Change Password user object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdChangepasswordJsonPost**
> object v1UsersUserIdChangepasswordJsonPost($token, $user_id, $body)

Edit user

Update the users details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Current Login user ID
$body = new \Swagger\Client\Model\Body23(); // \Swagger\Client\Model\Body23 | Change Password user object

try {
    $result = $apiInstance->v1UsersUserIdChangepasswordJsonPost($token, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdChangepasswordJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| Current Login user ID |
 **body** | [**\Swagger\Client\Model\Body23**](../Model/Body23.md)| Change Password user object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdJsonDelete**
> object v1UsersUserIdJsonDelete($token, $user_id)

Deletes the user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | user id to delete

try {
    $result = $apiInstance->v1UsersUserIdJsonDelete($token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| user id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UsersUserIdJsonGet**
> object v1UsersUserIdJsonGet($token, $user_id)

users

Returns Users listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Selected User ID

try {
    $result = $apiInstance->v1UsersUserIdJsonGet($token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1UsersUserIdJsonPut**
> object v1UsersUserIdJsonPut($token, $user_id, $body)

Edit user

Update the users details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$user_id = 789; // int | Current Login user ID
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | Edit user object

try {
    $result = $apiInstance->v1UsersUserIdJsonPut($token, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersUserIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **user_id** | **int**| Current Login user ID |
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)| Edit user object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

