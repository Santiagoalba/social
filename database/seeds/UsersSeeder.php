<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        App\User::create([
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'password' => encrypt('abc123'),
        ]);
    }
}