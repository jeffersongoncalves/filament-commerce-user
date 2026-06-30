<?php

use JeffersonGoncalves\Commerce\User\Models\User;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Pages\CreateUser;
use JeffersonGoncalves\FilamentCommerce\User\Resources\User\Pages\ListUser;
use Livewire\Livewire;

it('renders the user list page', function () {
    User::factory()->count(2)->create();

    Livewire::test(ListUser::class)->assertOk();
});

it('creates a user record through the panel', function () {
    Livewire::test(CreateUser::class)
        ->fillForm([
            'email' => 'admin@example.com',
            'first_name' => 'Ada',
            'last_name' => 'Lovelace',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(User::query()->count())->toBe(1);
});
