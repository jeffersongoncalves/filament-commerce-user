<?php

namespace JeffersonGoncalves\FilamentCommerce\User;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceUserServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-user';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
