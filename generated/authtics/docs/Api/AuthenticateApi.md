# GeneratedAuthMe\AuthenticateApi

All URIs are relative to https://us-central1-approverequest-fbf70.cloudfunctions.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate()**](AuthenticateApi.md#authenticate) | **POST** /authenticate | Begin an authentication request


## `authenticate()`

```php
authenticate($authentication_request): \GeneratedAuthMe\Model\AuthenticationResponse
```

Begin an authentication request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: authSecurity
$config = GeneratedAuthMe\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeneratedAuthMe\Api\AuthenticateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_request = new \GeneratedAuthMe\Model\AuthenticationRequest(); // \GeneratedAuthMe\Model\AuthenticationRequest | User details for authentication

try {
    $result = $apiInstance->authenticate($authentication_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_request** | [**\GeneratedAuthMe\Model\AuthenticationRequest**](../Model/AuthenticationRequest.md)| User details for authentication |

### Return type

[**\GeneratedAuthMe\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[authSecurity](../../README.md#authSecurity)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
