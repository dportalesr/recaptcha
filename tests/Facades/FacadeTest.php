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

namespace Artisanry\Tests\Recaptcha\Tests\Facades;

use Artisanry\Recaptcha\Recaptcha;
use Artisanry\Tests\Recaptcha\AbstractTestCase;
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
        return \Artisanry\Recaptcha\Facades\Recaptcha::class;
    }

    protected function getFacadeRoot()
    {
        return Recaptcha::class;
    }
}
