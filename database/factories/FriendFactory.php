<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\House;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\friend>
 */
class FriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'frenpoint' => fake()->numberBetween(0, 100),
            'house_id' => House::inRandomOrder()->first()->id
        ];
    }
}
