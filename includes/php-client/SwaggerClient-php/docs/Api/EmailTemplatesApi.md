# Swagger\Client\EmailTemplatesApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1EmailTemplatesEmailTemplateIdJsonGet**](EmailTemplatesApi.md#v1EmailTemplatesEmailTemplateIdJsonGet) | **GET** /v1/email_templates/{emailTemplateId}.json | Get email template by ID
[**v1EmailTemplatesEmailTemplateIdJsonPut**](EmailTemplatesApi.md#v1EmailTemplatesEmailTemplateIdJsonPut) | **PUT** /v1/email_templates/{emailTemplateId}.json | Update an email templates


# **v1EmailTemplatesEmailTemplateIdJsonGet**
> object v1EmailTemplatesEmailTemplateIdJsonGet($token, $email_template_id)

Get email template by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$email_template_id = "email_template_id_example"; // string | Id of template to fetch

try {
    $result = $apiInstance->v1EmailTemplatesEmailTemplateIdJsonGet($token, $email_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->v1EmailTemplatesEmailTemplateIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **email_template_id** | **string**| Id of template to fetch |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1EmailTemplatesEmailTemplateIdJsonPut**
> object v1EmailTemplatesEmailTemplateIdJsonPut($token, $email_template_id, $body)

Update an email templates

Update the email templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$email_template_id = 789; // int | emailTemplate id to update
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | Update emailTemplate object

try {
    $result = $apiInstance->v1EmailTemplatesEmailTemplateIdJsonPut($token, $email_template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->v1EmailTemplatesEmailTemplateIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **email_template_id** | **int**| emailTemplate id to update |
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)| Update emailTemplate object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

