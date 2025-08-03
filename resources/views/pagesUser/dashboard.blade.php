@extends('layout')

@section('title', 'Dashboard')

@section('content')

<style>
    body {
        background: linear-gradient(to right, #f0fcf8, #ffffff);
        font-family: 'Poppins', sans-serif;
    }

    .feature-box {
        background-color: #137a5d;
        color: white;
        border-radius: 16px;
        padding: 30px 15px;
        text-align: center;
        transition: 0.3s;
    }

    .feature-box:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .feature-box.inactive {
        background-color: #d6f5ea;
        color: #777;
    }

    .feature-box.inactive:hover {
        transform: none;
        box-shadow: none;
        cursor: not-allowed;
    }

    .funcionalidade {
        text-align: center;
        margin-top: 60px;
    }

    .funcionalidade h2 {
        font-weight: bold;
        margin-bottom: 20px;
    }

    .funcionalidade p {
        color: #333;
    }

    .whatsapp-link {
        color: #198754;
        text-decoration: none;
        font-weight: bold;
    }

    .whatsapp-link:hover {
        text-decoration: underline;
    }

    .avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #137a5d;
    }

</style>

<div class="container mt-5">
    <h2 class="text-center mb-4 text-success">Olá, {{ $user->name }} 👋</h2>
    <p class="text-center mb-5">Bem-vindo ao seu painel! Aqui estão todos os recursos disponíveis.</p>

    <div class="row text-center g-4 justify-content-center">
        <div class="col-md-3">
            <a href="{{ route('relatorio-user') }}" class="text-decoration-none">
                <div class="feature-box">
                    📄<br>Relatórios
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('demo.fluxo-caixa') }}" class="text-decoration-none">
                <div class="feature-box">
                    💼<br>Fluxo de Caixa
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('demo.plano-contas') }}" class="text-decoration-none">
                <div class="feature-box">
                    🧾<br>Plano de Contas
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('demo.lancar-receita') }}" class="text-decoration-none">
                <div class="feature-box inactive">
                    💸<br>Lançar Receita
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('demo.lancar-despesa') }}" class="text-decoration-none">
                <div class="feature-box inactive">
                    💳<br>Lançar Despesa
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('demo.grafico') }}" class="text-decoration-none">
                <div class="feature-box">
                    📊<br>Gráficos
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
