<?php

namespace Database\Factories;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'price' => rand(500, 1000) * 100,
            'description' => fake()->paragraphs(2, true),
            'photo' => 'https://dummyimage.com/600x600/998299/fff.jpg&text=pizza+shop'
        ];
    }
}
