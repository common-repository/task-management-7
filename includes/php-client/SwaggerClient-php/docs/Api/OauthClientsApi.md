# Swagger\Client\OauthClientsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OauthClientsClientIdJsonDelete**](OauthClientsApi.md#v1OauthClientsClientIdJsonDelete) | **DELETE** /v1/oauth/clients/{clientId}.json | Deletes a client
[**v1OauthClientsClientIdJsonPut**](OauthClientsApi.md#v1OauthClientsClientIdJsonPut) | **PUT** /v1/oauth/clients/{clientId}.json | Update an existing Client
[**v1OauthClientsJsonGet**](OauthClientsApi.md#v1OauthClientsJsonGet) | **GET** /v1/oauth/clients.json | Finds organizations by tags
[**v1OauthClientsJsonPost**](OauthClientsApi.md#v1OauthClientsJsonPost) | **POST** /v1/oauth/clients.json | Add a new oauth_clients to the store


# **v1OauthClientsClientIdJsonDelete**
> object v1OauthClientsClientIdJsonDelete($token, $client_id)

Deletes a client



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OauthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$client_id = 789; // int | client id to delete

try {
    $result = $apiInstance->v1OauthClientsClientIdJsonDelete($token, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthClientsApi->v1OauthClientsClientIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **client_id** | **int**| client id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OauthClientsClientIdJsonPut**
> object v1OauthClientsClientIdJsonPut($token, $client_id, $body)

Update an existing Client

Update the Cliene

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OauthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$client_id = 789; // int | client id to update
$body = new \Swagger\Client\Model\Body38(); // \Swagger\Client\Model\Body38 | Created client object

try {
    $result = $apiInstance->v1OauthClientsClientIdJsonPut($token, $client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthClientsApi->v1OauthClientsClientIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **client_id** | **int**| client id to update |
 **body** | [**\Swagger\Client\Model\Body38**](../Model/Body38.md)| Created client object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OauthClientsJsonGet**
> object v1OauthClientsJsonGet($token)

Finds organizations by tags

Returns clients listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OauthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1OauthClientsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthClientsApi->v1OauthClientsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1OauthClientsJsonPost**
> object v1OauthClientsJsonPost($token, $body)

Add a new oauth_clients to the store

Created clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OauthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | Created client object

try {
    $result = $apiInstance->v1OauthClientsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthClientsApi->v1OauthClientsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body15**](../Model/Body15.md)| Created client object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

