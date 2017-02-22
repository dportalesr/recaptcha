# Laravel Recaptcha

I would appreciate you taking the time to look at my [Patreon](https://www.patreon.com/faustbrian) and considering to support me if I'm saving you some time with my work.

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-recaptcha
```

And then include the service provider within `app/config/app.php`.

``` php
BrianFaust\Recaptcha\RecaptchaServiceProvider::class
```

And, for convenience, add a facade alias to this same file at the bottom:

``` php
'Recaptcha' => BrianFaust\Recaptcha\Facades\Recaptcha
```

## Configuration

Laravel Recaptcha supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="BrianFaust\Recaptcha\RecaptchaServiceProvider"
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

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
