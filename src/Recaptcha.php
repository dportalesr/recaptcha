<?php

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Recaptcha;

use Illuminate\Http\Request;
use Illuminate\View\View;
use ReCaptcha\ReCaptcha as GoogleReCaptcha;

class Recaptcha
{
    private $secretKey;

    private $siteKey;

    private $config = [
        'language' => 'en-GB',
        'data'     => [
            'data-sitekey'          => null,
            'data-theme'            => 'light',
            'data-type'             => 'image',
            'data-size'             => 'normal',
            'data-tabindex'         => '0',
            'data-callback'         => null,
            'data-expired-callback' => null,
        ],
    ];

    public function __construct($siteKey, $secretKey)
    {
        $this->siteKey = $siteKey;
        $this->secretKey = $secretKey;

        $this->setSiteKey($this->siteKey);
    }

    public function render(): View
    {
        return view('recaptcha::recaptcha', $this->config)->render();
    }

    public function verify(Request $request)
    {
        return (new GoogleReCaptcha($this->secretKey))
                    ->verify($request->get('g-recaptcha-response'), $request->ip())
                    ->isSuccess();
    }

    public function setLanguage($value): self
    {
        return $this->setConfigValue('language', $value);
    }

    public function setSiteKey($value): self
    {
        return $this->setConfigValue('data.data-sitekey', $value);
    }

    public function setTheme($value): self
    {
        return $this->setConfigValue('data.data-theme', $value);
    }

    public function setType($value): self
    {
        return $this->setConfigValue('data.data-type', $value);
    }

    public function setSize($value): self
    {
        return $this->setConfigValue('data.data-size', $value);
    }

    public function setTabindex($value): self
    {
        return $this->setConfigValue('data.data-tabindex', $value);
    }

    public function setCallback($value): self
    {
        return $this->setConfigValue('data.data-callback', $value);
    }

    public function setExpiredCallback($value): self
    {
        return $this->setConfigValue('data.data-expired-callback', $value);
    }

    public function setConfigValue($key, $value): self
    {
        array_set($this->config, $key, $value);

        return $this;
    }
}
