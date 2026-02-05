<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
            'name' => 'Bras',
            'slug' => 'bras',
            'description' => '',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Shorts',
            'slug' => 'shorts',
            'description' => '',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Tops',
            'slug' => 'tops',
            'description' => '',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Leggings',
            'slug' => 'leggings',
            'description' => '',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Warmers',
            'slug' => 'warmers',
            'description' => '',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
