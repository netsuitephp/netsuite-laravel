# netsuite-laravel

 [![License](https://img.shields.io/packagist/l/ryanwinchester/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/netsuite-php)

A PHP supplemental package to the `ryanwinchester/netsuite-php` package to
add the NetSuite service client to the service container of a
[Laravel](https://www.laravel.com) application.

## Usage

```
composer require netsuitephp/netsuite-laravel
```

By default, the configuration will assume you have your `$_ENV` populated
with netsuite configuration keys laid out in the `netsuite-php` package.

Go to [the netsuite-php](https://github.com/netsuitephp/netsuite-php) page
for more details.

Once installed, you should be able to access the netsuite service in the
usual ways that you might get a service from the container, either by the
full service class name or using the alias provided. In theory you should
also be able to use dependency injection.

```php
// Either method works
$service = app(NetSuite\NetSuiteService::class);
$service = app('netsuite');
```
