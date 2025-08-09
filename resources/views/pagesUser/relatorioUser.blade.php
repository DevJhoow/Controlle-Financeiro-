@extends('layout')
@section('title', 'Relatório')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">📊 Relatórios Financeiros</h2>

    {{-- Resumo em Cards --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="bg-success text-white p-3 rounded shadow-sm">
                <h5>Receitas</h5>
                <p class="fs-4">R$ {{ number_format($totalReceitas, 2, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-danger text-white p-3 rounded shadow-sm">
                <h5>Despesas</h5>
                <p class="fs-4">R$ {{ number_format($totalDespesas, 2, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-primary text-white p-3 rounded shadow-sm">
                <h5>Saldo </h5>
                <p class="fs-4">R$ {{ number_format($saldo, 2, ',', '.') }}</p>
            </div>
        </div>
    </div>

    {{-- Dica de Emergência --}}
    <div class="alert alert-warning shadow-sm">
        <i class="bi bi-piggy-bank-fill me-2"></i>
        Reserve pelo menos <strong>10% do seu saldo</strong> para emergências 💡
    </div>

   <h4 class="mt-4 mb-3">
        <i class="bi bi-list-check me-2"></i>Últimos Lançamentos
    </h4>

    <div class="list-group shadow-sm rounded">
        @forelse($ultimosLancamentos as $lancamento)
            <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted">
                        {{ \Carbon\Carbon::parse($lancamento->data)->format('d/m/Y') }}
                    </small>
                    <h6 class="mb-0">{{ $lancamento->descricao }}</h6>
                    <span class="badge {{ $lancamento->tipo == 'receita' ? 'bg-success' : 'bg-danger' }}">
                        {{ ucfirst($lancamento->tipo) }}
                    </span>
                </div>
                <div class="fw-bold {{ $lancamento->tipo == 'receita' ? 'text-success' : 'text-danger' }}">
                    R$ {{ number_format($lancamento->valor, 2, ',', '.') }}
                </div>
            </div>
        @empty
            <div class="list-group-item text-center text-muted">
                Nenhum lançamento encontrado.
            </div>
        @endforelse
    </div>

    <div class="mt-3">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar para o Dashboard
        </a>
    </div>

</div>
@endsection
