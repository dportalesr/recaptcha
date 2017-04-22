<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Recaptcha\Facades;

use Illuminate\Support\Facades\Facade;

class Recaptcha extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'recaptcha';
    }
}
