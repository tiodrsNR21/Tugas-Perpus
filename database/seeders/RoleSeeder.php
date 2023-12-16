<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Annggota', 'Pustkawan', 'Admin'];

        foreach ($roles as $key => $role) {
            \Spatie\Permission\Models\Role::create(['name' => $role]);
        }
    }
}
