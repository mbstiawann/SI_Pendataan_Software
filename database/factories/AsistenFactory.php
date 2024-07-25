<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asisten>
 */
class AsistenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->macAddress(),
            'name' => fake()->name(),
            'sex' => 'man',
            'address' => fake()->address(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'study_program' => 'Sistem Informasi',
            'image' => fake()->image(),
            'join_date' => fake()->date(),
            'user_id' => User::factory()
        ];
    }
}
