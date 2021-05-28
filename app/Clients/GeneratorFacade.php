<?php

namespace App\Clients;

use Illuminate\Support\Facades\Facade;

class GeneratorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'generator';
    }
}
