<?php

namespace JeffersonGoncalves\FilamentCommerce\User\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceUserPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-user';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Configuration';
    }
}
