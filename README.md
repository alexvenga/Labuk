# Laravel blade admin-panel components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexvenga/labuk.svg?style=flat-square)](https://packagist.org/packages/alexvenga/labuk)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alexvenga/labuk/run-tests?label=tests)](https://github.com/alexvenga/labuk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alexvenga/labuk/Check%20&%20fix%20styling?label=code%20style)](https://github.com/alexvenga/labuk/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alexvenga/labuk.svg?style=flat-square)](https://packagist.org/packages/alexvenga/labuk)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/Laravel Admin Blade UI Kit.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/Laravel Admin Blade UI Kit)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require alexvenga/labuk
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="AlexVenga\Labuk\LabukServiceProvider" --tag="main-menu-view-component"
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="labuk-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="labuk-views"
```

## Usage

```php
$laravelAdminBladeUIKit = new AlexVenga\LaravelAdminBladeUIKit();
echo $laravelAdminBladeUIKit->echoPhrase('Hello, AlexVenga!');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AlexVenga](https://github.com/alexvenga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
