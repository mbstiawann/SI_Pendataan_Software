<?php

namespace Database\Seeders;

use App\Models\Asisten;
use App\Models\Instalation;
use App\Models\Software;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([SoftwareSeeder::class, AsistenSeeder::class]);
        Instalation::factory(50)->recycle([
            Software::all(),
            Asisten::all()
        ])->create();
    }
}
