<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SchoolUnit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_unit_id' => SchoolUnit::factory(),
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'image_url' => 'https://placehold.co/400x400?text=Teacher',
            'bio' => $this->faker->paragraph(),
            'is_structural' => $this->faker->boolean(20), // 20% chance
            'order' => $this->faker->numberBetween(1, 100),
        ];
    }
}
