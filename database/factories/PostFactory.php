<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,sizeof(User::all()->pluck('id')->toArray())-1),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'excerpt' => $this->faker->paragraph(5),
            'body' => $this->faker->paragraph(50),
        ];
    }
}
