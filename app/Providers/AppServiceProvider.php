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

            // you can change the repos if you want when use type hint in DI
            $repos = 'Core\\Domain\\Repositories\\'. $model . "Repository";

            // register service container for DI,
            // now you can recognize this provider as Simple factory pattern or Organizer.
            $this->app->bind($interface, $repos);
        } 

    }
}
