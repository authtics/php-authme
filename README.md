# PHP SDK For AuthMe authentication

PHP SDK for authenticating with AuthMe app.

Installation
------------

Use composer to manage your dependencies and download PHP-AUTHME:

```bash
composer require authtics/php-authme
```

Example
-------

```php
use AuthMe\Application;

$username = "<username of the user>";
$account = "<application account from portal>";
$privateKey = file_get_contents("<File path for the private key whose public key is associated with application>");

$application = new Application($account, $privateKey);
print_r($application->authenticate($username));
```
