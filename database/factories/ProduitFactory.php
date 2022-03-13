<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_produit' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'details' => $this->faker->text,
            'prix' => $this->faker->numberBetween,
            'images' => $this->faker->sentence,
            // 'create_at' => now()
        ];
    }
}
