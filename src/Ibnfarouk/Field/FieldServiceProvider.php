<?php

namespace Ibnfarouk\Field;

use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'field');

//        $this->publishes([
//            __DIR__.'/views' => resource_path('views/vendor/field'),
//        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton('field', function () {
//            return $this->app->make('Ibnfarouk\Field\Field');
//        });
    }
}
