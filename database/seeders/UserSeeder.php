<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        $admin->assignRole('admin');

        // Buat User
        $user = User::create([
            'name' => 'User ',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        $user->assignRole('user');
    }
}
