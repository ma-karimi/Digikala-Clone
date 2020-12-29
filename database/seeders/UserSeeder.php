<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'super-admin', 'email' => 'super-admin@example.com', 'number' => '09122717839', 'password'=> '123456']);
        $user->assignRole('super-admin');

        $user = User::create(['name' => 'admin', 'email' => 'admin@example.com', 'number' => '09122717849', 'password'=> '123456']);
        $user->assignRole('admin');

        $user = User::create(['name' => 'seller', 'email' => 'seller@example.com', 'number' => '09122717859', 'password'=> '123456']);
        $user->assignRole('seller');

        $user = User::create(['name' => 'writer', 'email' => 'writer@example.com', 'number' => '09122717869', 'password'=> '123456']);
        $user->assignRole('writer');

        $user = User::create(['name' => 'user', 'email' => 'user@example.com', 'number' => '09122717879', 'password'=> '123456']);
        $user->assignRole('user');

    }
}
