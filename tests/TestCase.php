<?php

namespace codicastudio\csp\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use codicastudio\csp\cspServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            cspServiceProvider::class,
        ];
    }
}
