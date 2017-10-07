<?php namespace GeneaLabs\LaravelCasts\Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Eloquent\Factory;

trait CreatesApplication
{
    public function createApplication()
    {
        $app = require __DIR__ . '/../vendor/laravel/laravel/bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
