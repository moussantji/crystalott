<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MoviesTable>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(rand(5,10),true),
            'link' => 'https://www.youtube.com/watch?v=h9MbznbxlLc',
            'star' => '6,8(lmdb)',
            'time' => $this->faker->numberBetween(3700, 4000)
        ];
    }
}
