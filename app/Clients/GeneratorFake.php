<?php

namespace App\Clients;

class GeneratorFake
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function get()
    {
        return "foo-mock";
    }
}
