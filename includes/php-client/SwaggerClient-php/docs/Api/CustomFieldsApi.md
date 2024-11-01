# Swagger\Client\CustomFieldsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CustomFieldsUpdatePositionJsonPut**](CustomFieldsApi.md#v1CustomFieldsUpdatePositionJsonPut) | **PUT** /v1/custom_fields/update_position.json | Update custom field position


# **v1CustomFieldsUpdatePositionJsonPut**
> object v1CustomFieldsUpdatePositionJsonPut($token, $body)

Update custom field position

Update custom field position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body33(); // \Swagger\Client\Model\Body33 | The transaltion JSON you want to post

try {
    $result = $apiInstance->v1CustomFieldsUpdatePositionJsonPut($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->v1CustomFieldsUpdatePositionJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body33**](../Model/Body33.md)| The transaltion JSON you want to post |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

