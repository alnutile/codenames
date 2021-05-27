<?php

namespace App\Clients;

use Illuminate\Support\Facades\Facade;

class GeneratorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'generator';
    }

    /**
     * Replace the bound instance with a fake.
     *
     * @return \Illuminate\Support\Testing\Fakes\QueueFake
     */
    public static function fake()
    {
        static::swap($fake = new GeneratorFake(static::getFacadeApplication()));

        return $fake;
    }
}
