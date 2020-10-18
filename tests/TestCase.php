<?php

namespace codicastudio\csp\Tests;

use codicastudio\csp\cspServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            cspServiceProvider::class,
        ];
    }
}
