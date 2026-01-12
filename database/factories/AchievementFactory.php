<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement>
 */
class AchievementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Juara ' . $this->faker->numberBetween(1, 3) . ' ' . $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->date(),
            'image_url' => 'https://placehold.co/600x400?text=Achievement',
        ];
    }
}
