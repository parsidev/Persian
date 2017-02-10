<?php
namespace Parsidev\Persian\Facades;

use Illuminate\Support\Facades\Facade;

class Persian extends Facade
{
    protected static function getFacadeAccessor() {
        return 'persian';
    }
}