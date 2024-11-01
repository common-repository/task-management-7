# Swagger\Client\SettingsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1SettingsJsonGet**](SettingsApi.md#v1SettingsJsonGet) | **GET** /v1/settings.json | settings
[**v1SettingsJsonPost**](SettingsApi.md#v1SettingsJsonPost) | **POST** /v1/settings.json | Add settings
[**v1SettingsSettingIdJsonGet**](SettingsApi.md#v1SettingsSettingIdJsonGet) | **GET** /v1/settings/{settingId}.json | Get Settings by ID


# **v1SettingsJsonGet**
> object v1SettingsJsonGet($token)

settings

Returns settings listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1SettingsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->v1SettingsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1SettingsJsonPost**
> object v1SettingsJsonPost($token, $body)

Add settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | Created settings object

try {
    $result = $apiInstance->v1SettingsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->v1SettingsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)| Created settings object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1SettingsSettingIdJsonGet**
> object v1SettingsSettingIdJsonGet($token, $setting_id)

Get Settings by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$setting_id = "setting_id_example"; // string | Id of settings to fetch

try {
    $result = $apiInstance->v1SettingsSettingIdJsonGet($token, $setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->v1SettingsSettingIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **setting_id** | **string**| Id of settings to fetch |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

