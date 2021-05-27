<?php

namespace App\Providers;

use App\Clients\GenericGenerator;
use App\Clients\Haikunator;
use App\Clients\RandomWords;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CodenameGeneratorInterface::class, function () {
            return new GenericGenerator();
        });

        $this->app->bind("generator", function () {
            return new Haikunator();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
