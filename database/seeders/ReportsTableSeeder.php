<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reports')->insert([
            ['number' => '1', 'description' => 'Ошибка 404', 'created_at' => now(), 'updated_at' => now()],
            ['number' => '2', 'description' => 'Ошибка 500', 'created_at' => now(), 'updated_at' => now()],
            ['number' => '3', 'description' => 'Ошибка 500', 'created_at' => now(), 'updated_at' => now()],
            ['number' => '4', 'description' => 'Ошибка инициализации', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
