# Swagger\Client\AclApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AclLinksJsonGet**](AclApi.md#v1AclLinksJsonGet) | **GET** /v1/acl_links.json | acl
[**v1AclLinksJsonPost**](AclApi.md#v1AclLinksJsonPost) | **POST** /v1/acl_links.json | Add a acl


# **v1AclLinksJsonGet**
> object v1AclLinksJsonGet($token)

acl

Returns settings listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1AclLinksJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->v1AclLinksJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1AclLinksJsonPost**
> object v1AclLinksJsonPost($token, $body)

Add a acl

Created acl

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body13(); // \Swagger\Client\Model\Body13 | Created acl object

try {
    $result = $apiInstance->v1AclLinksJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->v1AclLinksJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body13**](../Model/Body13.md)| Created acl object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

