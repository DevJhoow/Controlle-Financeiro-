<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lancamento>
 */
class LancamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipo = $this->faker->randomElement(['receita', 'despesa']);
        $valor = $this->faker->randomFloat(2, 50, 5000);

        return [
            'user_id' => \App\Models\User::factory(), // ou use auth()->id() em uso real
            'descricao' => $tipo === 'receita' 
                ? $this->faker->randomElement(['Salário', 'Freelancer', 'Rendimento']) 
                : $this->faker->randomElement(['Aluguel', 'Internet', 'Supermercado']),
            'valor' => $valor,
            'tipo' => $tipo,
            'data' => $this->faker->dateTimeBetween('-3 months', 'now'),
        ];
    }
}
