<?php

namespace JeffersonGoncalves\FilamentCommerce\User\Resources\User\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
