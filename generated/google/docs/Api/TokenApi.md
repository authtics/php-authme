# GeneratedGoogle\TokenApi

All URIs are relative to https://www.googleapis.com/oauth2/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateToken()**](TokenApi.md#generateToken) | **POST** /token | Acquire new token


## `generateToken()`

```php
generateToken($grant_type, $assertion): \GeneratedGoogle\Model\TokenResponse
```

Acquire new token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: authSecurity
$config = GeneratedGoogle\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeneratedGoogle\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = 'urn:ietf:params:oauth:grant-type:jwt-bearer'; // string
$assertion = 'assertion_example'; // string

try {
    $result = $apiInstance->generateToken($grant_type, $assertion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  | [default to &#39;urn:ietf:params:oauth:grant-type:jwt-bearer&#39;]
 **assertion** | **string**|  |

### Return type

[**\GeneratedGoogle\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[authSecurity](../../README.md#authSecurity)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
