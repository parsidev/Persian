<?php
namespace Parsidev\Persian\Facades;

use Illuminate\Support\Facades\Facade;

class Persian extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'persian';
    }
}