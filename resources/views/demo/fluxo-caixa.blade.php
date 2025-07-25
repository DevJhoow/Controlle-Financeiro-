@extends('layout')

@section('title', 'Fluxo de Caixa - FinanPro')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Fluxo de Caixa (Demonstração)</h2>

    <p class="text-center mb-4">
        Acompanhe suas entradas e saídas de dinheiro mês a mês com clareza.
    </p>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Categoria</th>
                    <th>Valor (R$)</th>
                    <th>Saldo (R$)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01/07/2025</td>
                    <td>Salário</td>
                    <td class="text-success">Receita</td>
                    <td>Rendimentos</td>
                    <td>3.500,00</td>
                    <td>3.500,00</td>
                </tr>
                <tr>
                    <td>03/07/2025</td>
                    <td>Aluguel</td>
                    <td class="text-danger">Despesa</td>
                    <td>Moradia</td>
                    <td>-1.200,00</td>
                    <td>2.300,00</td>
                </tr>
                <tr>
                    <td>10/07/2025</td>
                    <td>Freelancer</td>
                    <td class="text-success">Receita</td>
                    <td>Serviços</td>
                    <td>800,00</td>
                    <td>3.100,00</td>
                </tr>
                <tr>
                    <td>15/07/2025</td>
                    <td>Mercado</td>
                    <td class="text-danger">Despesa</td>
                    <td>Alimentação</td>
                    <td>-450,00</td>
                    <td>2.650,00</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-end mt-3">
        <strong>Saldo Final:</strong> <span class="text-success">R$ 2.650,00</span>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('home.index') }}" class="btn btn-secondary">Voltar</a>
        <a href="{{ route('registro') }}" class="btn btn-primary">Crie sua conta gratuitamente</a>
    </div>
</div>
@endsection
