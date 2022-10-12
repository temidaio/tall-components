<?php

namespace Temidaio\TallComponents\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Temidaio\TallComponents\TallComponentServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            TallComponentServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('testing');
    }
}
