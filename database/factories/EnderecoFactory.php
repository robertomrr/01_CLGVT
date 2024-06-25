<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rua' => fake()->rua(),
            'bairro' => fake()->bairro(),
            'cidade' => fake()->cidade(),
            'uf' => fake()->uf(),
            'ibge' => fake()->ibge(),
        ];
    }
}
