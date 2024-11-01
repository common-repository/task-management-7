# Swagger\Client\PagesApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PagesJsonGet**](PagesApi.md#v1PagesJsonGet) | **GET** /v1/pages.json | Add a new pages
[**v1PagesJsonPost**](PagesApi.md#v1PagesJsonPost) | **POST** /v1/pages.json | Add a new pages
[**v1PagesPagesIdJsonDelete**](PagesApi.md#v1PagesPagesIdJsonDelete) | **DELETE** /v1/pages/{pagesId}.json | delete pages
[**v1PagesPagesIdJsonGet**](PagesApi.md#v1PagesPagesIdJsonGet) | **GET** /v1/pages/{pagesId}.json | Put pages
[**v1PagesPagesIdJsonPut**](PagesApi.md#v1PagesPagesIdJsonPut) | **PUT** /v1/pages/{pagesId}.json | Put pages


# **v1PagesJsonGet**
> object v1PagesJsonGet($token)

Add a new pages

Created pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1PagesJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->v1PagesJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1PagesJsonPost**
> object v1PagesJsonPost($token, $body)

Add a new pages

Created pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body55(); // \Swagger\Client\Model\Body55 | Created comment object

try {
    $result = $apiInstance->v1PagesJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->v1PagesJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body55**](../Model/Body55.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PagesPagesIdJsonDelete**
> object v1PagesPagesIdJsonDelete($token, $pages_id)

delete pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$pages_id = 789; // int | ID of pages that needs to be fetched

try {
    $result = $apiInstance->v1PagesPagesIdJsonDelete($token, $pages_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->v1PagesPagesIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **pages_id** | **int**| ID of pages that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PagesPagesIdJsonGet**
> object v1PagesPagesIdJsonGet($token, $pages_id)

Put pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$pages_id = 789; // int | ID of card that needs to be fetched

try {
    $result = $apiInstance->v1PagesPagesIdJsonGet($token, $pages_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->v1PagesPagesIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **pages_id** | **int**| ID of card that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PagesPagesIdJsonPut**
> object v1PagesPagesIdJsonPut($token, $pages_id, $body)

Put pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$pages_id = 789; // int | ID of pages that needs to be fetched
$body = new \Swagger\Client\Model\Body56(); // \Swagger\Client\Model\Body56 | Created comment object

try {
    $result = $apiInstance->v1PagesPagesIdJsonPut($token, $pages_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->v1PagesPagesIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **pages_id** | **int**| ID of pages that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body56**](../Model/Body56.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

