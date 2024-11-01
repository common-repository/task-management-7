# Swagger\Client\ActivitiesListingApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ActivitiesUndoActivityIdJsonPut**](ActivitiesListingApi.md#v1ActivitiesUndoActivityIdJsonPut) | **PUT** /v1/activities/undo/{activityId}.json | Undo activities


# **v1ActivitiesUndoActivityIdJsonPut**
> object v1ActivitiesUndoActivityIdJsonPut($token, $activity_id)

Undo activities

Update the activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivitiesListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | OAuth token
$activity_id = 789; // int | activityId to undo

try {
    $result = $apiInstance->v1ActivitiesUndoActivityIdJsonPut($token, $activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesListingApi->v1ActivitiesUndoActivityIdJsonPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| OAuth token |
 **activity_id** | **int**| activityId to undo |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

