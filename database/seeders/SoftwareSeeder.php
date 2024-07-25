<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Software::create([
            'name_software' => 'Microsoft Office',
            'category_software' => 'Other',
            'licence' => 'need',
            'slug' => 'mc-office'
        ]);
        Software::create([
            'name_software' => 'Rational Rose 2009',
            'category_software' => 'Analysis',
            'licence' => 'need',
            'slug' => 'rt-rose-2009'
        ]);
        Software::create([
            'name_software' => 'Vs Code',
            'category_software' => 'Code',
            'licence' => 'dontneed',
            'slug' => 'vs-code'
        ]);
        Software::create([
            'name_software' => 'Laragon',
            'category_software' => 'Code',
            'licence' => 'dontneed',
            'slug' => 'la-ra-gon'
        ]);
        Software::create([
            'name_software' => 'SPSS',
            'category_software' => 'Analysis',
            'licence' => 'need',
            'slug' => 'ana-ly-sis'
        ]);
    }
}
