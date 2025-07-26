@extends('layout')
@section('title', 'Vendas Anuais')

@section('content')
<div class="container">
    <h2 class="text-center text-primary">Análise de Vendas Mensais - 2025</h2>
    <p class="text-center text-muted">Visualize o desempenho mês a mês e descubra qual produto teve maior saída em cada período.</p>

    <canvas id="graficoVendas" height="120"></canvas>

    <div class="mt-4">
        <h5 class="text-success">Produto mais vendido por mês:</h5>
        <ul id="produtosMaisVendidos" class="list-group"></ul>
    </div>

    <div class="alert alert-info mt-4" role="alert">
        Focar nos produtos mais vendidos de cada mês ajuda a empresa a planejar melhor o estoque, investir no que traz mais retorno e garantir mais vendas no próximo mês.
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/vendas.js') }}"></script>
@endsection
