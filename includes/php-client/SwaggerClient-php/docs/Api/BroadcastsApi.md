# Swagger\Client\BroadcastsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BroadcastsBroadcastIdJsonDelete**](BroadcastsApi.md#v1BroadcastsBroadcastIdJsonDelete) | **DELETE** /v1/broadcasts/{broadcastId}.json | delete broadcasts
[**v1BroadcastsBroadcastIdJsonGet**](BroadcastsApi.md#v1BroadcastsBroadcastIdJsonGet) | **GET** /v1/broadcasts/{broadcastId}.json | Put broadcasts
[**v1BroadcastsBroadcastIdJsonPut**](BroadcastsApi.md#v1BroadcastsBroadcastIdJsonPut) | **PUT** /v1/broadcasts/{broadcastId}.json | Put broadcasts
[**v1BroadcastsJsonGet**](BroadcastsApi.md#v1BroadcastsJsonGet) | **GET** /v1/broadcasts.json | Add a new broadcasts to the card
[**v1BroadcastsJsonPost**](BroadcastsApi.md#v1BroadcastsJsonPost) | **POST** /v1/broadcasts.json | Add a new broadcasts to the card
[**v1MeBroadcastsJsonGet**](BroadcastsApi.md#v1MeBroadcastsJsonGet) | **GET** /v1/me/broadcasts.json | View broadcasts


# **v1BroadcastsBroadcastIdJsonDelete**
> object v1BroadcastsBroadcastIdJsonDelete($token, $broadcast_id)

delete broadcasts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$broadcast_id = 789; // int | ID of broadcast that needs to be fetched

try {
    $result = $apiInstance->v1BroadcastsBroadcastIdJsonDelete($token, $broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->v1BroadcastsBroadcastIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **broadcast_id** | **int**| ID of broadcast that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BroadcastsBroadcastIdJsonGet**
> object v1BroadcastsBroadcastIdJsonGet($token, $broadcast_id)

Put broadcasts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$broadcast_id = 789; // int | ID of broadcast that needs to be fetched

try {
    $result = $apiInstance->v1BroadcastsBroadcastIdJsonGet($token, $broadcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->v1BroadcastsBroadcastIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **broadcast_id** | **int**| ID of broadcast that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BroadcastsBroadcastIdJsonPut**
> object v1BroadcastsBroadcastIdJsonPut($token, $broadcast_id, $body)

Put broadcasts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$broadcast_id = 789; // int | ID of broadcast that needs to be fetched
$body = new \Swagger\Client\Model\Body49(); // \Swagger\Client\Model\Body49 | Created comment object

try {
    $result = $apiInstance->v1BroadcastsBroadcastIdJsonPut($token, $broadcast_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->v1BroadcastsBroadcastIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **broadcast_id** | **int**| ID of broadcast that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body49**](../Model/Body49.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BroadcastsJsonGet**
> object v1BroadcastsJsonGet($token)

Add a new broadcasts to the card

Created broadcasts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1BroadcastsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->v1BroadcastsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1BroadcastsJsonPost**
> object v1BroadcastsJsonPost($token, $body)

Add a new broadcasts to the card

Created broadcasts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body48(); // \Swagger\Client\Model\Body48 | Created comment object

try {
    $result = $apiInstance->v1BroadcastsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->v1BroadcastsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body48**](../Model/Body48.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1MeBroadcastsJsonGet**
> object v1MeBroadcastsJsonGet($token)

View broadcasts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1MeBroadcastsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->v1MeBroadcastsJsonGet: ', $e->getMessage(), PHP_EOL;
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

