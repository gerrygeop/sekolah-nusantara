<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $startDate = $this->faker->dateTimeBetween('now', '+3 months');
        return [
            'user_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->address(),
            'start_date' => $startDate,
            'end_date' => $this->faker->dateTimeBetween($startDate, $startDate->format('Y-m-d H:i:s').' +2 hours'),
            'image_url' => 'https://placehold.co/800x600?text=Agenda',
        ];
    }
}
