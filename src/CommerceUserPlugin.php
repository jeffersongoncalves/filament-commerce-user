<?php

namespace JeffersonGoncalves\FilamentCommerce\User;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\User\Concerns\HasCommerceUserPluginConfig;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\UserResource;

class CommerceUserPlugin implements Plugin
{
    use HasCommerceUserPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-user';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'user' => UserResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
