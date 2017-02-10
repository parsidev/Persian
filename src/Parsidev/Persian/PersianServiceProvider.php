<?php
namespace Parsidev\Persian;

use Illuminate\Support\ServiceProvider;

class PersianServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register() {
        $this->app->singleton('persian', function() {
            return new Persian();
        });
    }

    public function provides() {
        return ['persian'];
    }
}