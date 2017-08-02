<?php

/*
 * This file is part of Laravel Recaptcha.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Recaptcha\Tests\Facades;

use BrianFaust\Recaptcha\Recaptcha;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\Recaptcha\AbstractTestCase;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'recaptcha';
    }

    protected function getFacadeClass()
    {
        return \BrianFaust\Recaptcha\Facades\Recaptcha::class;
    }

    protected function getFacadeRoot()
    {
        return Recaptcha::class;
    }
}
