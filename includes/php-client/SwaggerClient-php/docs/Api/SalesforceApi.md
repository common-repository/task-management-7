# Swagger\Client\SalesforceApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1SalesforceJsonGet**](SalesforceApi.md#v1SalesforceJsonGet) | **GET** /v1/salesforce.json | Add a new salesforce
[**v1SalesforceJsonPost**](SalesforceApi.md#v1SalesforceJsonPost) | **POST** /v1/salesforce.json | Add a new salesforce
[**v1SalesforceSalesforceIdJsonDelete**](SalesforceApi.md#v1SalesforceSalesforceIdJsonDelete) | **DELETE** /v1/salesforce/{salesforceId}.json | delete salesforce
[**v1SalesforceSalesforceIdJsonGet**](SalesforceApi.md#v1SalesforceSalesforceIdJsonGet) | **GET** /v1/salesforce/{salesforceId}.json | Put salesforce
[**v1SalesforceSalesforceIdJsonPut**](SalesforceApi.md#v1SalesforceSalesforceIdJsonPut) | **PUT** /v1/salesforce/{salesforceId}.json | Put salesforce


# **v1SalesforceJsonGet**
> object v1SalesforceJsonGet($token)

Add a new salesforce

Created salesforce

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesforceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1SalesforceJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesforceApi->v1SalesforceJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1SalesforceJsonPost**
> object v1SalesforceJsonPost($token, $body)

Add a new salesforce

Created salesforce

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesforceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body59(); // \Swagger\Client\Model\Body59 | Created comment object

try {
    $result = $apiInstance->v1SalesforceJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesforceApi->v1SalesforceJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body59**](../Model/Body59.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SalesforceSalesforceIdJsonDelete**
> object v1SalesforceSalesforceIdJsonDelete($token, $salesforce_id)

delete salesforce



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesforceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$salesforce_id = 789; // int | ID of salesforce that needs to be fetched

try {
    $result = $apiInstance->v1SalesforceSalesforceIdJsonDelete($token, $salesforce_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesforceApi->v1SalesforceSalesforceIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **salesforce_id** | **int**| ID of salesforce that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SalesforceSalesforceIdJsonGet**
> object v1SalesforceSalesforceIdJsonGet($token, $salesforce_id)

Put salesforce



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesforceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$salesforce_id = 789; // int | ID of card that needs to be fetched

try {
    $result = $apiInstance->v1SalesforceSalesforceIdJsonGet($token, $salesforce_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesforceApi->v1SalesforceSalesforceIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **salesforce_id** | **int**| ID of card that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SalesforceSalesforceIdJsonPut**
> object v1SalesforceSalesforceIdJsonPut($token, $salesforce_id, $body)

Put salesforce



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesforceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$salesforce_id = 789; // int | ID of salesforce that needs to be fetched
$body = new \Swagger\Client\Model\Body60(); // \Swagger\Client\Model\Body60 | Created comment object

try {
    $result = $apiInstance->v1SalesforceSalesforceIdJsonPut($token, $salesforce_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesforceApi->v1SalesforceSalesforceIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **salesforce_id** | **int**| ID of salesforce that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body60**](../Model/Body60.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

