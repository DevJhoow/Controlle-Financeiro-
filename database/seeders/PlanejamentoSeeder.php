<?php

namespace Database\Seeders;

use App\Models\Planejamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanejamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            ['tipo' => 'receita', 'descricao' => 'Vendas de Produtos'],
            ['tipo' => 'receita', 'descricao' => 'Serviços Prestados'],
            ['tipo' => 'receita', 'descricao' => 'Recebimentos Extras'],
            ['tipo' => 'receita', 'descricao' => 'Investimentos'],
            ['tipo' => 'despesa', 'descricao' => 'Aluguel'],
            ['tipo' => 'despesa', 'descricao' => 'Energia Elétrica'],
            ['tipo' => 'despesa', 'descricao' => 'Compras de Estoque'],
            ['tipo' => 'despesa', 'descricao' => 'Marketing'],
            ['tipo' => 'despesa', 'descricao' => 'Salários'],
            ['tipo' => 'planejamento', 'descricao' => '📊 Objetivo: Reduzir prejuízos em 20% nos próximos 3 meses.'],
            ['tipo' => 'planejamento', 'descricao' => '🛒 Ação: Otimizar compras com fornecedores mais baratos e em quantidade planejada.'],
            ['tipo' => 'planejamento', 'descricao' => '📈 Meta de Vendas: Aumentar o ticket médio em 15% com campanhas promocionais direcionadas.'],
            ['tipo' => 'planejamento', 'descricao' => '📅 Controle de Fluxo: Planejar despesas fixas com 2 meses de antecedência.'],
            ['tipo' => 'planejamento', 'descricao' => '✅ Resultados Esperados: Lucros consistentes, sem sustos ou emergências financeiras.'],
        ];

        foreach ($itens as $item) {
            Planejamento::create($item);
        }
    }
}
