<?php

namespace Database\Factories;

use App\Models\Asisten;
use App\Models\Software;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instalation>
 */
class InstalationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'note' => fake()->text(),
            'solved' => 'done',
            'date_instalation' => fake()->date(),
            'asisten_id' => Asisten::factory(),
            'software_id' => Software::factory()
        ];
    }
}
