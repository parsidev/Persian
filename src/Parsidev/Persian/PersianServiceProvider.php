<?php
namespace Parsidev\Persian;

use Illuminate\Support\ServiceProvider;

class PersianServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot() {

    }

    public function register() {
        $this->app['persian'] = $this->app->singleton(Persian::class, function($app) {
            return new Persian();
        });
    }

    public function provides() {
        return ['persian'];
    }
}