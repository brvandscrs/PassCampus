<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'date_debut' => fake()->date(),
            'date_fin' => fake()->date(),
            'montant' => fake()->randomFloat(2, 1000, 10000),
            'etat_contrat' => fake()->randomElement(['actif', 'expire', 'suspendu']),
        ];
    }
}
