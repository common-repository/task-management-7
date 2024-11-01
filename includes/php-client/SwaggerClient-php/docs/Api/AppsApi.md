# Swagger\Client\AppsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AppsJsonGet**](AppsApi.md#v1AppsJsonGet) | **GET** /v1/apps.json | Apps
[**v1AppsSettingsJsonGet**](AppsApi.md#v1AppsSettingsJsonGet) | **GET** /v1/apps/settings.json | Apps


# **v1AppsJsonGet**
> object v1AppsJsonGet($token)

Apps

Returns apps listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1AppsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->v1AppsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1AppsSettingsJsonGet**
> object v1AppsSettingsJsonGet($token, $app)

Apps

Returns apps listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$app = "app_example"; // string | Selected board ID

try {
    $result = $apiInstance->v1AppsSettingsJsonGet($token, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->v1AppsSettingsJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **app** | **string**| Selected board ID | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

