# Use this package to handle and inject several services commonly needed by your website (Google Analytics, Google Tag Manager, CMP, etc...).

[![Latest Version on Packagist](https://img.shields.io/packagist/v/snappysnail/laravel-site-kit.svg?style=flat-square)](https://packagist.org/packages/snappysnail/laravel-site-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/snappysnail/laravel-site-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/snappysnail/laravel-site-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/snappysnail/laravel-site-kit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/snappysnail/laravel-site-kit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/snappysnail/laravel-site-kit.svg?style=flat-square)](https://packagist.org/packages/snappysnail/laravel-site-kit)

## Installation

You can install the package via composer:

```bash
composer require snappysnail/laravel-site-kit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-site-kit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-site-kit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-site-kit-views"
```

## Usage

```php
$laravelSiteKit = new Snappysnail\LaravelSiteKit();
echo $laravelSiteKit->echoPhrase('Hello, Snappysnail!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marco Cazzaro](https://github.com/Snappysnail)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
