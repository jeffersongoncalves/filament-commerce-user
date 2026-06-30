<?php

namespace JeffersonGoncalves\FilamentCommerce\User\Resources\User;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\User\Models\User;
use JeffersonGoncalves\FilamentCommerce\User\CommerceUserPlugin;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Pages\CreateUser;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Pages\EditUser;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Pages\ListUser;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Schemas\UserForm;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Tables\UserTable;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceUserPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-user.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUser::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
