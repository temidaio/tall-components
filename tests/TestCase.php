<?php

namespace Temidaio\TallComponents\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Temidaio\TallComponents\TallComponentServiceProvider;

class TestCase extends Orchestra
{
    /**
     * @param $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            TallComponentServiceProvider::class,
        ];
    }
}
