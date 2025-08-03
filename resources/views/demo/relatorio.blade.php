@extends('layout')
@section('title', 'Demonstração do Relatório')

@section('content')
<div class="container mt-4">
    <h2>📊 Relatórios Financeiros (Demonstração)</h2>
    <p class="text-muted mb-4">
        Veja como será a visualização de relatórios reais após o cadastro.
    </p>

    {{-- Resumo do Mês --}}
    <div class="card mb-4">
        <h5 class="card-header bg-primary text-white">
            <i class="bi bi-calendar-check"></i> Resumo do Mês - Junho/2025
        </h5>
        <div class="card-body">
            <p><i class="bi bi-cash-coin text-success"></i> <strong>Receitas:</strong> R$ 7.500,00</p>
            <p><i class="bi bi-cash text-danger"></i> <strong>Despesas:</strong> R$ 4.230,00</p>
            <p><i class="bi bi-wallet2 text-info"></i> <strong>Saldo:</strong> R$ 3.270,00</p>
        </div>
    </div>

    {{-- Últimos Lançamentos --}}
    <div class="card">
        <h5 class="card-header">
            <i class="bi bi-clock-history"></i> Últimos Lançamentos
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                📥 Salário - R$ 5.000,00
            </li>
            <li class="list-group-item">
                📤 Aluguel - R$ 1.200,00
            </li>
            <li class="list-group-item">
                📤 Internet - R$ 150,00
            </li>
            <li class="list-group-item">
                📥 Freelancer - R$ 2.500,00
            </li>
            <li class="list-group-item">
                📤 Supermercado - R$ 320,00
            </li>
        </ul>
    </div>

    {{-- Call to Action --}}
    <p class="mt-4 text-muted">
        <i class="bi bi-lightning-charge-fill text-warning"></i>
        <strong>E mais:</strong> ao se cadastrar, você terá acesso a recursos avançados como geração de relatórios personalizados, exportação em PDF, metas financeiras, e muito mais!
    </p>

    <div class="mt-3">
        <a href="{{ route('registro') }}" class="btn btn-success me-2">
            <i class="bi bi-person-plus-fill"></i> Criar minha conta agora
        </a>
        <a href="{{ route('home.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle"></i> Voltar
        </a>
    </div>
</div>
@endsection
