<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory([ 'role' => 'company' ]),
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(1),
            'country' => 'syria',
            'city' => 'aleppo',
        ];
    }
}
