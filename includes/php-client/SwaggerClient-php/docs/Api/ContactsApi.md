# Swagger\Client\ContactsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ContactsContactsIdJsonDelete**](ContactsApi.md#v1ContactsContactsIdJsonDelete) | **DELETE** /v1/contacts/{contactsId}.json | delete contacts
[**v1ContactsContactsIdJsonGet**](ContactsApi.md#v1ContactsContactsIdJsonGet) | **GET** /v1/contacts/{contactsId}.json | Put contacts
[**v1ContactsContactsIdJsonPut**](ContactsApi.md#v1ContactsContactsIdJsonPut) | **PUT** /v1/contacts/{contactsId}.json | Put contacts
[**v1ContactsJsonGet**](ContactsApi.md#v1ContactsJsonGet) | **GET** /v1/contacts.json | Add a new contacts
[**v1ContactsJsonPost**](ContactsApi.md#v1ContactsJsonPost) | **POST** /v1/contacts.json | Add a new contacts


# **v1ContactsContactsIdJsonDelete**
> object v1ContactsContactsIdJsonDelete($token, $contacts_id)

delete contacts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$contacts_id = 789; // int | ID of contacts that needs to be fetched

try {
    $result = $apiInstance->v1ContactsContactsIdJsonDelete($token, $contacts_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->v1ContactsContactsIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **contacts_id** | **int**| ID of contacts that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsContactsIdJsonGet**
> object v1ContactsContactsIdJsonGet($token, $contacts_id)

Put contacts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$contacts_id = 789; // int | ID of card that needs to be fetched

try {
    $result = $apiInstance->v1ContactsContactsIdJsonGet($token, $contacts_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->v1ContactsContactsIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **contacts_id** | **int**| ID of card that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsContactsIdJsonPut**
> object v1ContactsContactsIdJsonPut($token, $contacts_id, $body)

Put contacts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$contacts_id = 789; // int | ID of contacts that needs to be fetched
$body = new \Swagger\Client\Model\Body58(); // \Swagger\Client\Model\Body58 | Created comment object

try {
    $result = $apiInstance->v1ContactsContactsIdJsonPut($token, $contacts_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->v1ContactsContactsIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **contacts_id** | **int**| ID of contacts that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body58**](../Model/Body58.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ContactsJsonGet**
> object v1ContactsJsonGet($token)

Add a new contacts

Created contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1ContactsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->v1ContactsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1ContactsJsonPost**
> object v1ContactsJsonPost($token, $body)

Add a new contacts

Created contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body57(); // \Swagger\Client\Model\Body57 | Created comment object

try {
    $result = $apiInstance->v1ContactsJsonPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->v1ContactsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body57**](../Model/Body57.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

