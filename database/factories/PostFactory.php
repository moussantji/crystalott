<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        return [
            'title' => $this->generateTitle(52),
            'content' => $this->faker->sentences(5,true),
            'user_id' => User::factory(),
            'category_id' =>Category::factory(),
        ];
    }

    /**
     * Génère un titre avec une longueur minimale spécifiée.
     *
     * @param int $minLength
     * @return string
     */
    private function generateTitle($minLength)
    {
        $title = $this->faker->sentence(rand(5, 10), true);

        // Ajoute des mots jusqu'à atteindre la longueur minimale
        while (strlen($title) < $minLength) {
            $title .= ' ' . $this->faker->word();
        }

        // Tronque à la longueur exacte si nécessaire
        return substr($title, 0, $minLength);
    }
}
