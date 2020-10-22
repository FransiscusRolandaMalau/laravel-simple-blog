<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@laravel.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
