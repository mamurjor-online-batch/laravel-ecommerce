<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'User']);

        User::create([
            'role_id'=>1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make(12345678),
        ]);

        User::create([
            'role_id'=>2,
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>Hash::make(12345678),
        ]);
    }
}
