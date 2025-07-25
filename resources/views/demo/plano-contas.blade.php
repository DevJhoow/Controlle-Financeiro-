@extends('layout')
@section('title', 'Demonstração de Plano de Contas')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Plano de Contas - Demonstração</h2>

    <p class="alert alert-info text-center">
        Esta tela é uma demonstração estática de como o Plano de Contas pode ajudar sua empresa a reduzir prejuízos e melhorar o planejamento financeiro.
    </p>

    <section class="row g-4">
        {{-- Receita --}}
        <section class="col-md-6">
            <article class="card shadow-sm">
                <header class="card-header bg-primary text-white">Contas de Receita</header>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Vendas de Produtos</li>
                    <li class="list-group-item">Serviços Prestados</li>
                    <li class="list-group-item">Recebimentos Extras</li>
                    <li class="list-group-item">Investimentos</li>
                </ul>
            </article>
        </section>

        {{-- Despesa --}}
        <section class="col-md-6">
            <article class="card shadow-sm">
                <header class="card-header bg-danger text-white">Contas de Despesa</header>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Aluguel</li>
                    <li class="list-group-item">Energia Elétrica</li>
                    <li class="list-group-item">Compras de Estoque</li>
                    <li class="list-group-item">Marketing</li>
                    <li class="list-group-item">Salários</li>
                </ul>
            </article>
        </section>

        {{-- Planejamento --}}
        <section class="col-12">
            <article class="card shadow-sm">
                <header class="card-header bg-success text-white">Planejamento e Metas</header>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">📊 <strong>Objetivo:</strong> Reduzir prejuízos em 20% nos próximos 3 meses.</li>
                    <li class="list-group-item">🛒 <strong>Ação:</strong> Otimizar compras com fornecedores mais baratos e em quantidade planejada.</li>
                    <li class="list-group-item">📈 <strong>Meta de Vendas:</strong> Aumentar o ticket médio em 15% com campanhas promocionais direcionadas.</li>
                    <li class="list-group-item">📅 <strong>Controle de Fluxo:</strong> Planejar despesas fixas com 2 meses de antecedência.</li>
                    <li class="list-group-item">✅ <strong>Resultados Esperados:</strong> Lucros consistentes, sem sustos ou emergências financeiras.</li>
                </ul>
            </article>
        </section>
    </section>

    {{-- CTA --}}
    <div class="mt-4 text-center">
        <a href="{{ route('registro') }}" class="btn btn-success me-2">
            <i class="bi bi-person-plus-fill"></i> Criar minha conta agora
        </a>
        <a href="{{ route('home.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle"></i> Voltar
        </a>
    </div>
</div>
@endsection
