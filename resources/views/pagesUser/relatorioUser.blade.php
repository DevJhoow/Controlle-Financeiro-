@extends('layout')
@section('title', 'Relatório')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">📊 Relatórios Financeiros</h2>

    {{-- Resumo em Cards --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="bg-success text-white p-3 rounded shadow-sm">
                <h5>Total de Receitas</h5>
                <p class="fs-4">R$ {{ number_format($totalReceitas, 2, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-danger text-white p-3 rounded shadow-sm">
                <h5>Total de Despesas</h5>
                <p class="fs-4">R$ {{ number_format($totalDespesas, 2, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-primary text-white p-3 rounded shadow-sm">
                <h5>Saldo Final</h5>
                <p class="fs-4">R$ {{ number_format($saldo, 2, ',', '.') }}</p>
            </div>
        </div>
    </div>

    {{-- Dica de Emergência --}}
    <div class="alert alert-warning shadow-sm">
        <i class="bi bi-piggy-bank-fill me-2"></i>
        Reserve pelo menos <strong>10% do seu saldo</strong> para emergências 💡
    </div>

    {{-- Tabela de Últimos Lançamentos --}}
    <h4 class="mt-4 mb-3"><i class="bi bi-list-check me-2"></i>Últimos Lançamentos</h4>
    <table class="table table-striped table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Data</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Valor (R$)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ultimosLancamentos as $lancamento)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($lancamento->data)->format('d/m/Y') }}</td>
                    <td>{{ $lancamento->descricao }}</td>
                    <td>
                        <span class="badge {{ $lancamento->tipo == 'receita' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($lancamento->tipo) }}
                        </span>
                    </td>
                    <td>R$ {{ number_format($lancamento->valor, 2, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Nenhum lançamento encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
