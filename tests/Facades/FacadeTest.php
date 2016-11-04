<?php

namespace BrianFaust\Tests\Recaptcha\Tests\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\Recaptcha\AbstractTestCase;
use BrianFaust\Recaptcha\Recaptcha;

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
