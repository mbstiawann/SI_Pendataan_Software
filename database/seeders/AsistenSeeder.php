<?php

namespace Database\Seeders;

use App\Models\Asisten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asisten::factory(10)->create();
    }
}
