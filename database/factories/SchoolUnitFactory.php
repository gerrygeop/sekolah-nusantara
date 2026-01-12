<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolUnit>
 */
class SchoolUnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->randomElement(['SD Nusantara', 'SMP Nusantara', 'SMA Nusantara']);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'headmaster_name' => $this->faker->name(),
            'image_url' => 'https://placehold.co/600x400?text=' . urlencode($name),
        ];
    }
}
