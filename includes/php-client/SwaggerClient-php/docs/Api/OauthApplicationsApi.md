# Swagger\Client\OauthApplicationsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OauthApplicationsApplicationIdJsonDelete**](OauthApplicationsApi.md#v1OauthApplicationsApplicationIdJsonDelete) | **DELETE** /v1/oauth/applications/{applicationId}.json | Deletes a client application
[**v1OauthApplicationsJsonGet**](OauthApplicationsApi.md#v1OauthApplicationsJsonGet) | **GET** /v1/oauth/applications.json | Finds oauth application by tags


# **v1OauthApplicationsApplicationIdJsonDelete**
> object v1OauthApplicationsApplicationIdJsonDelete($token, $application_id)

Deletes a client application



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OauthApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$application_id = 789; // int | application Id to delete

try {
    $result = $apiInstance->v1OauthApplicationsApplicationIdJsonDelete($token, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApplicationsApi->v1OauthApplicationsApplicationIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **application_id** | **int**| application Id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OauthApplicationsJsonGet**
> object v1OauthApplicationsJsonGet($token)

Finds oauth application by tags

Returns oauth application listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OauthApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1OauthApplicationsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApplicationsApi->v1OauthApplicationsJsonGet: ', $e->getMessage(), PHP_EOL;
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

