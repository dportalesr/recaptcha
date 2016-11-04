<?php

namespace BrianFaust\Tests\Recaptcha;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\Recaptcha\ServiceProvider::class;
    }
}
