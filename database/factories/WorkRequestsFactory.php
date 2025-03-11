<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkRequest>
 */
class WorkRequestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->jobTitle(),
            'email' => fake()->email(),
            'message' =>fake()->text(),
            'status' => fake()->randomElement(['pending', 'reviewed', 'approved', 'rejected']),
            'created_at' => now()
        ];
    }
}
