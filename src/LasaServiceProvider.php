<?php

namespace edgewizz\lasa;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LasaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Lasa\Controllers\LasaController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'lasa');
        Blade::component('lasa::lasa.open', 'lasa.open');
        Blade::component('lasa::lasa.index', 'lasa.index');
        Blade::component('lasa::lasa.edit', 'lasa.edit');
    }
}
