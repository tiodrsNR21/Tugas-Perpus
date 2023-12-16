<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'administrator',
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'username' => 'pustakawan',
            'name' => 'Pustakawan',
            'email' => 'pustakawan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        $user->assignRole('pustakawan');

        $user = User::create([
            'username' => 'anggota',
            'name' => 'Anggota',
            'email' => 'anggota@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
            'created_at' => now(),
        ]);
        $user->assignRole('anggota');
    }
}
