<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $models = array('Post', 'Tag');

        foreach ($models as $idx => $model) {
            $interface = 'Core\\Domain\\Contracts\\' . $model. "RepositoryInterface";
            $repos = 'Core\\Domain\\Repositories\\'. $model . "Repository";

            // register service container for DI
            $this->app->bind($interface, $repos);
        } 

    }
}
