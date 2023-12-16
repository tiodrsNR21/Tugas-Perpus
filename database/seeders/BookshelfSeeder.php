<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bookshelf::insert([
            [
                'code' => 'B001',
                'name' => 'Rak Buku A',
                'created_at' => now(),
            ],
            [
                'code' => 'B002',
                'name' => 'Rak Buku B',
                'created_at' => now(),
            ],
            [
                'code' => 'B003',
                'name' => 'Rak Buku C',
                'created_at' => now(),
            ]
        ]);
    }
}