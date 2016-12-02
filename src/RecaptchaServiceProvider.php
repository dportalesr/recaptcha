<?php

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Recaptcha;

use BrianFaust\ServiceProvider\ServiceProvider;

class RecaptchaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();

        $this->publishViews();

        $this->loadViews();

        $this->loadTranslations();

        $app = $this->app;

        $app->recaptcha->setLanguage($app->getLocale());

        $app->validator->extend('recaptcha', function ($attribute, $value) use ($app) {
            return $app->recaptcha->verify($app['request']);
        });

        if ($app->bound('form')) {
            $app->form->macro('recaptcha', function ($attributes = []) use ($app) {
                return $app->recaptcha->render();
            });
        }
    }

    public function register()
    {
        parent::register();

        $this->mergeConfig();

        $this->app->bind('recaptcha', function ($app) {
            return new Recaptcha(
                $app->config['recaptcha.site_key'],
                $app->config['recaptcha.secret_key']
            );
        });
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['recaptcha']);
    }

    public function getPackageName()
    {
        return 'recaptcha';
    }
}
