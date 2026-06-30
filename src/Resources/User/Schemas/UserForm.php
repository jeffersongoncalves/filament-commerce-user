<?php

namespace JeffersonGoncalves\FilamentCommerce\User\Resources\User\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('email'),
                        TextInput::make('first_name'),
                        TextInput::make('last_name'),
                    ])->columns(2),
            ]);
    }
}
