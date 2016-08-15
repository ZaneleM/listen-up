<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use ListenUp\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::whereSlug('admin')->first();

        $user = User::create([
          'first_name' => 'First',
          'last_name' => 'Last',
          'username' => 'first_last',
          'email' => 'first.last@email.com',
          'password' => \Hash::make('password')
        ]);

        $user->attachRole($adminRole);
    }
}
