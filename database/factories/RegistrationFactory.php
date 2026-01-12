<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SchoolUnit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
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
            'registration_number' => 'REG-' . $this->faker->unique()->numberBetween(1000, 9999),
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'place_of_birth' => $this->faker->city(),
            'date_of_birth' => $this->faker->date(),
            'nik' => $this->faker->numerify('################'),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            
            'father_name' => $this->faker->name('male'),
            'father_job' => $this->faker->jobTitle(),
            'father_phone' => $this->faker->phoneNumber(),
            
            'mother_name' => $this->faker->name('female'),
            'mother_job' => $this->faker->jobTitle(),
            'mother_phone' => $this->faker->phoneNumber(),
            
            'previous_school' => 'SD ' . $this->faker->city(),
            'previous_school_address' => $this->faker->address(),
            'graduation_year' => $this->faker->year(),
            'average_grade' => $this->faker->randomFloat(2, 70, 100),
            
            'status' => 'pending',
        ];
    }
}
