<?php
namespace Sichikawa\LaravelLineBot\Facades;

use Illuminate\Support\Facades\Facade;

class Line extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'line';
    }
}