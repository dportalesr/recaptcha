<?php



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
