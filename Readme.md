# Offchaindata PHPClient

---
[![Apache-2 license](https://img.shields.io/badge/license-Apache2-brightgreen.svg)](https://www.apache.org/licenses/LICENSE-2.0)   

Requirements
-

* PHP Version :
    - For Developer : `>=7.2`
    - For User : `>=5.5`
    
* PHP Extensions :
    - `ext-curl`
    - `ext-json`
    - `ext-mbstring`
    
Installing
-----

##### From GitHub
Clone this repository, or download the zip into your project's folder and then add the following line in your code:
```
require('offchaindata/autoload.php');
```
*Note: you might have to change the path depending on your project's folder structure.*

## API Documentation

**Init the Client**
```php
$client = new Offchaindata/PHPClient($token);
```

**Auth**
```php
$response = $client->call->auth->me();
```

**Date**   
```php
$params = array();
$response = $client->call->date->date($params);
```

**Holidays**
```php
$params = array();
$response = $client->call->date->holidays($params);
```

**Locations**
```php
$response = $client->call->date->locations();
```

Get specific response
-

**Get complete headers as array**
```php
$headers = $response->getHeaders();
```

**Get complete body as array**
```php
$headers = $response->getBody();
```

**Get complete body as string**
```php
$headers = $response->getBodyRaw();
```

**Get status code in integer**
```php
$headers = $response->getStatusCode();
```

**Get content type**
```php
$headers = $response->getContentType();
```