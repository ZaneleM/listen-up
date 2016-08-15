<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;

class RoleSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $adminRole = Role::create([
      'name' => 'Admin',
      'slug' => 'admin',
      'description' => '', // optional
      'level' => 3, // optional, set to 1 by default
    ]);
    $managerRole = Role::create([
      'name' => 'Manager',
      'slug' => 'manager',
      'description' => '', // optional
      'level' => 2, // optional, set to 1 by default
    ]);
    $userRole = Role::create([
      'name' => 'User',
      'slug' => 'user',
      'description' => '', // optional
      'level' => 1, // optional, set to 1 by default
    ]);
  }
}
