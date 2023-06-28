<?php

namespace Snappysnail\LaravelSiteKit;

use Snappysnail\LaravelSiteKit\Commands\LaravelSiteKitCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSiteKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-site-kit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-site-kit_table')
            ->hasCommand(LaravelSiteKitCommand::class);
    }
}
