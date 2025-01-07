<?php

namespace Msamgan\LaravelEav;

use Msamgan\LaravelEav\Commands\LaravelEavCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelEavServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-eav')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_eav_table')
            ->hasCommand(LaravelEavCommand::class);
    }
}
