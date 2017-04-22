<?php



declare(strict_types=1);

namespace BrianFaust\Recaptcha\Facades;

use Illuminate\Support\Facades\Facade;

class Recaptcha extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'recaptcha';
    }
}
