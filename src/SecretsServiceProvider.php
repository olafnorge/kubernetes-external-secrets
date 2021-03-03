<?php

namespace olafnorge\Secrets;

use Illuminate\Support\ServiceProvider;
use olafnorge\Secrets\Contracts\Secrets;

class SecretsServiceProvider extends ServiceProvider {


    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../config/secrets.php' => config_path('secrets.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__.'/../config/secrets.php', 'secrets'
        );
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton(Secrets::class, function () {
            return with(config('secrets.concrete'), function ($class) {
                return new $class;
            });
        });
    }
}
