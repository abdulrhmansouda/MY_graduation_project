<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(['role' => 'employee']),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'description' => $this->faker->paragraph,
            'birth' => '1999-02-25',
            'country' => "syria",
            'city' => "aleppo",
        ];
    }
}
