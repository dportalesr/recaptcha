<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Recaptcha;

use Illuminate\Support\ServiceProvider;

class RecaptchaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-recaptcha.php' => config_path('laravel-recaptcha.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-recaptcha'),
        ], 'views');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-recaptcha');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-recaptcha');

        $app = $this->app;

        $app->recaptcha->setLanguage($app->getLocale());

        $this->registerValidationRule($app);

        $this->registerFormMacro($app);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-recaptcha.php', 'laravel-recaptcha');

        $this->registerBuilder();
    }

    /**
     * Register the builder.
     */
    private function registerBuilder()
    {
        $this->app->bind('recaptcha', function ($app) {
            return new Recaptcha(
                $app->config['laravel-recaptcha.site_key'],
                $app->config['laravel-recaptcha.secret_key']
            );
        });
    }

    /**
     * Register the validation rule.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    private function registerValidationRule($app)
    {
        $app->validator->extend('recaptcha', function ($attribute, $value) use ($app) {
            return $app->recaptcha->verify($app['request']);
        });
    }

    /**
     * Register the form macro.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    private function registerFormMacro($app)
    {
        if ($app->bound('form')) {
            $app->form->macro('recaptcha', function ($attributes = []) use ($app) {
                return $app->recaptcha->render();
            });
        }
    }
}
