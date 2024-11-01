# Swagger\Client\WebhooksApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1WebhooksJsonGet**](WebhooksApi.md#v1WebhooksJsonGet) | **GET** /v1/webhooks.json | Finds webhooks by tags
[**v1WebhooksJsonPost**](WebhooksApi.md#v1WebhooksJsonPost) | **POST** /v1/webhooks.json | Add a new webhooks to the store
[**v1WebhooksWebhooksIdJsonDelete**](WebhooksApi.md#v1WebhooksWebhooksIdJsonDelete) | **DELETE** /v1/webhooks/{webhooksId}.json | Deletes a webhook
[**v1WebhooksWebhooksIdJsonPut**](WebhooksApi.md#v1WebhooksWebhooksIdJsonPut) | **PUT** /v1/webhooks/{webhooksId}.json | Update an existing webhooks


# **v1WebhooksJsonGet**
> object v1WebhooksJsonGet($token)

Finds webhooks by tags

Returns webhooks listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1WebhooksJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1WebhooksJsonPost**
> object v1WebhooksJsonPost($token, $body)

Add a new webhooks to the store

Created Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body16(); // \Swagger\Client\Model\Body16 | Created webhook object

try {
    $result = $apiInstance->v1WebhooksJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body16**](../Model/Body16.md)| Created webhook object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksWebhooksIdJsonDelete**
> object v1WebhooksWebhooksIdJsonDelete($token, $webhooks_id)

Deletes a webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$webhooks_id = 789; // int | hook id to delete

try {
    $result = $apiInstance->v1WebhooksWebhooksIdJsonDelete($token, $webhooks_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksWebhooksIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **webhooks_id** | **int**| hook id to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1WebhooksWebhooksIdJsonPut**
> object v1WebhooksWebhooksIdJsonPut($token, $webhooks_id, $body)

Update an existing webhooks

Update the webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$webhooks_id = 789; // int | Webhook id to update
$body = new \Swagger\Client\Model\Body44(); // \Swagger\Client\Model\Body44 | Created webhook object

try {
    $result = $apiInstance->v1WebhooksWebhooksIdJsonPut($token, $webhooks_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->v1WebhooksWebhooksIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **webhooks_id** | **int**| Webhook id to update |
 **body** | [**\Swagger\Client\Model\Body44**](../Model/Body44.md)| Created webhook object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

