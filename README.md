# Laravel Recaptcha

[![Build Status](https://img.shields.io/travis/artisanry/Recaptcha/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Recaptcha)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/recaptcha.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Recaptcha.svg?style=flat-square)](https://github.com/artisanry/Recaptcha/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Recaptcha.svg?style=flat-square)](https://packagist.org/packages/artisanry/Recaptcha)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/recaptcha
```

## Configuration

Laravel Recaptcha supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Artisanry\Recaptcha\RecaptchaServiceProvider"
```

This will create a `config/recaptcha.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

##### Validate a captcha from a request

``` php
$this->validate($request, ['g-recaptcha-response' => 'required|recaptcha']);
```

##### Render captcha

``` php
{!! app('recaptcha')->render() !!}
```

##### Render captcha *(with laravelcollective/html)*

``` php
{!! Form::recaptcha() !!}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
