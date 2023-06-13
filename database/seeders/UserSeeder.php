<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create(
            [
                'name' => 'Admin',
                'role_id' => 1,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
            ],
        );
        User::create(
            [
                'name' => 'Staff',
                'role_id' => 2,
                'email' => 'staff@gmail.com',
                'password' => Hash::make('staff123'),
            ],
        );
        User::create(
            [
                'name' => 'User',
                'role_id' => 3,
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
            ],
        );
    }
}
