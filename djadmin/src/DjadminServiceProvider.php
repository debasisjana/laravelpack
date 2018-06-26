<?php

namespace Djpack\Djadmin;

use Illuminate\Support\ServiceProvider;

class DjadminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('Djpack\Djadmin\DjnewController');
    }
}
