<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Hash::make(123456);
        $user = User::create(['name' => 'super-admin', 'email' => 'super-admin@example.com', 'mobile' => '09122717839', 'password'=> $pass]);
        $user->assignRole('super-admin');

        $user = User::create(['name' => 'admin', 'email' => 'admin@example.com', 'mobile' => '09122717849', 'password'=> $pass]);
        $user->assignRole('admin');

        $user = User::create(['name' => 'seller', 'email' => 'seller@example.com', 'mobile' => '09122717859', 'password'=> $pass]);
        $user->assignRole('seller');

        $user = User::create(['name' => 'writer', 'email' => 'writer@example.com', 'mobile' => '09122717869', 'password'=> $pass]);
        $user->assignRole('writer');

        $user = User::create(['name' => 'user', 'email' => 'user@example.com', 'mobile' => '09122717879', 'password'=> $pass]);
        $user->assignRole('user');

    }
}
