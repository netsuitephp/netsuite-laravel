# netsuite-laravel

 [![License](https://img.shields.io/packagist/l/ryanwinchester/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/netsuite-php)

A PHP supplemental package to the `ryanwinchester/netsuite-php` package to
add the NetSuite service client to the service container of a
[Laravel](https://www.laravel.com) application. This package should be
considered to be beta software for the time being.

* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Support](#support)

## Installation

```
composer require netsuitephp/netsuite-laravel
```

## Configuration

By default, the configuration will assume you have your `$_ENV` populated
with netsuite configuration keys laid out in the `netsuite-php` package.
Read the included `config/netsuite.php` file as it is documented with inline
comments.

Go to
[the netsuite-php quickstart](https://github.com/netsuitephp/netsuite-php#quickstart)
section for more details. You can jump directly to the
[.env.example](https://github.com/netsuitephp/netsuite-php/blob/master/.env.example)
file to save time.

#### Publishing the config file

If for whatever reason you don't want to use the `.env` method of configuring
the NetSuite service in your application, you can also publish the provided
config file into your Laravel application and modify it as desired.

```
php artisan vendor:publish --provider=NetSuite\\Providers\\NetSuiteServiceProvider
```

## Usage

Once installed, you should be able to access the netsuite service in the
usual ways that you might get an object from the service container, either by
the full service class name or using the alias provided, or by using the
provided Facade, if preferred.

#### Get from the service container using the long form method

```php
$service = app(NetSuite\NetSuiteService::class);
$response = $service->get($request);
```

#### Get from the service container using the alias

```php
$service = app('netsuite');
$response = $service->get($request);
```

#### Get from the Facade accessor

```php
$response = NetSuite::get($request);
```

#### Dependency Injection
You can also use Laravel's dependency injection. This imaginary Http
controller provides a theoretical demonstration.

```php
namespace App\Http\Controllers;

use NetSuite\Classes\GetRequest;
use NetSuite\Classes\RecordRef;
use NetSuite\Classes\RecordType;
use NetSuite\NetSuiteService;

class LookupController extends Controller
{
    public function lookupCustomer(NetSuiteService $service, int $internalId)
    {
        $request = new GetRequest();
        $request->baseRef = new RecordRef();
        $request->baseRef->type = RecordType::customer;
        $request->baseRef->internalId = $internalId;
        $response = $service->get($request);
    }
}
```

## Support

If you need help with this package you can use the netsuite-php
project's
[discussions](https://github.com/netsuitephp/netsuite-php/discussions)
area to look for help or if you believe you have discovered a bug, please
report it in this package's [issues area](https://github.com/netsuitephp/netsuite-php/issues).
