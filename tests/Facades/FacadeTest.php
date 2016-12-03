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

namespace BrianFaust\Tests\Recaptcha\Tests\Facades;

use BrianFaust\Recaptcha\Recaptcha;
use BrianFaust\Tests\Recaptcha\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

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
