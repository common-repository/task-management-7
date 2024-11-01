# Swagger\Client\CardDiagramsApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CardDiagramsCardDiagramIdJsonDelete**](CardDiagramsApi.md#v1CardDiagramsCardDiagramIdJsonDelete) | **DELETE** /v1/card_diagrams/{cardDiagramId}.json | delete card_diagrams
[**v1CardDiagramsCardDiagramIdJsonGet**](CardDiagramsApi.md#v1CardDiagramsCardDiagramIdJsonGet) | **GET** /v1/card_diagrams/{cardDiagramId}.json | Put card_diagrams
[**v1CardDiagramsCardDiagramIdJsonPut**](CardDiagramsApi.md#v1CardDiagramsCardDiagramIdJsonPut) | **PUT** /v1/card_diagrams/{cardDiagramId}.json | Put card_diagrams
[**v1CardDiagramsJsonGet**](CardDiagramsApi.md#v1CardDiagramsJsonGet) | **GET** /v1/card_diagrams.json | Add a new card_diagrams to the card
[**v1CardDiagramsJsonPost**](CardDiagramsApi.md#v1CardDiagramsJsonPost) | **POST** /v1/card_diagrams.json | Add a new card_diagrams to the card


# **v1CardDiagramsCardDiagramIdJsonDelete**
> object v1CardDiagramsCardDiagramIdJsonDelete($token, $card_diagram_id)

delete card_diagrams



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$card_diagram_id = 789; // int | ID of card that needs to be fetched

try {
    $result = $apiInstance->v1CardDiagramsCardDiagramIdJsonDelete($token, $card_diagram_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardDiagramsApi->v1CardDiagramsCardDiagramIdJsonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **card_diagram_id** | **int**| ID of card that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CardDiagramsCardDiagramIdJsonGet**
> object v1CardDiagramsCardDiagramIdJsonGet($token, $card_diagram_id)

Put card_diagrams



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$card_diagram_id = 789; // int | ID of card that needs to be fetched

try {
    $result = $apiInstance->v1CardDiagramsCardDiagramIdJsonGet($token, $card_diagram_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardDiagramsApi->v1CardDiagramsCardDiagramIdJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **card_diagram_id** | **int**| ID of card that needs to be fetched |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CardDiagramsCardDiagramIdJsonPut**
> object v1CardDiagramsCardDiagramIdJsonPut($token, $card_diagram_id, $body)

Put card_diagrams



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$card_diagram_id = 789; // int | ID of card_diagrams that needs to be fetched
$body = new \Swagger\Client\Model\Body54(); // \Swagger\Client\Model\Body54 | Created comment object

try {
    $result = $apiInstance->v1CardDiagramsCardDiagramIdJsonPut($token, $card_diagram_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardDiagramsApi->v1CardDiagramsCardDiagramIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **card_diagram_id** | **int**| ID of card_diagrams that needs to be fetched |
 **body** | [**\Swagger\Client\Model\Body54**](../Model/Body54.md)| Created comment object |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CardDiagramsJsonGet**
> object v1CardDiagramsJsonGet($token)

Add a new card_diagrams to the card

Created card_diagrams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token

try {
    $result = $apiInstance->v1CardDiagramsJsonGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardDiagramsApi->v1CardDiagramsJsonGet: ', $e->getMessage(), PHP_EOL;
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

# **v1CardDiagramsJsonPost**
> object v1CardDiagramsJsonPost($token, $body, $attachment)

Add a new card_diagrams to the card

Created card_diagrams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CardDiagramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$body = new \Swagger\Client\Model\Body53(); // \Swagger\Client\Model\Body53 | Created comment object
$attachment = "/path/to/file.txt"; // \SplFileObject | Upload File.

try {
    $result = $apiInstance->v1CardDiagramsJsonPost($token, $body, $attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardDiagramsApi->v1CardDiagramsJsonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **body** | [**\Swagger\Client\Model\Body53**](../Model/Body53.md)| Created comment object |
 **attachment** | **\SplFileObject**| Upload File. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

