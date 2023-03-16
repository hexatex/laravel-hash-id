<?php

namespace Hexatex\LaravelHashId;

use Hexatex\LaravelHashId\Commands\LaravelHashIdCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHashIdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-hash-id')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-hash-id_table')
            ->hasCommand(LaravelHashIdCommand::class);
    }
}
