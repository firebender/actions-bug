<?php

namespace Bugsy\Tests;

use Bugsy\PackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * @return array <int, string>
     */
    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class,
        ];
    }

}
