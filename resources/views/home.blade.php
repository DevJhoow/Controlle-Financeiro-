@extends('layout')
@section('title', 'Home')

@section('content')

 <!-- Boas-vindas -->
    <section class="welcome-text">
            <p>Bem-vindo ao <strong>Controle Financeiro FinanPro</strong>, seu assistente para organizar, controlar e planejar suas finanças com eficiência e segurança.</p>
            <p>Aqui você encontra ferramentas práticas para lançar receitas e despesas, gerar relatórios detalhados, visualizar gráficos intuitivos e montar seu plano de contas personalizado.</p>
            <p>E mais! Contamos com uma equipe de profissionais especializados pronta para ajudar você a atingir seus objetivos financeiros, seja para empresas ou para sua vida pessoal.</p>
            <p>Explore nosso painel e comece hoje mesmo a transformar sua gestão financeira!</p>
    </section>

    <!-- Menu Grid -->
    <div class="menu-grid">
        {{-- demo de relatorio --}}
        <div class="menu-btn">
           <a href="{{ route('demo.relatorios') }}" class="text-decoration-none text-white d-block text-center">
               <i class="bi bi-file-earmark-text-fill"></i><br>Relatórios
           </a>
        </div>
        <div class="menu-btn">
            <a href="{{ route('demo.fluxo-caixa') }}" class="text-decoration-none text-white d-block text-center">
                <i class="bi bi-wallet2"></i><br>Fluxo de Caixa
            </a>
        </div>
        <div class="menu-btn">
            <a href="{{ route('demo.plano-contas') }}" class="text-decoration-none text-white d-block text-center">
                <i class="bi bi-journal-check"></i><br>Planejamento de Contas
            </a>
        </div>
        <div class="menu-btn receita">
            <a href="{{ route('demo.lancar-receita') }}" class="text-decoration-none text-white d-block text-center">
                <i class="bi bi-cash-coin"></i><br>Lançar Receitas
            </a>
        </div>
        <div class="menu-btn despesa">
            <a href="{{ route('demo.lancar-despesa') }}" class="text-decoration-none text-white d-block text-center">
                <i class="bi bi-cash"></i><br>Lançar Despesas
            </a>
        </div>
        <div class="menu-btn">
            <a href="{{ route('demo.grafico') }}" class="text-decoration-none text-white d-block text-center">
                <i class="bi bi-bar-chart-line-fill"></i><br>Gráficos
            </a>
        </div>
    </div>

    <section class="features">
        <h3 class="text-center mb-4">Funcionalidades que vão te surpreender</h3>
        <div class="row text-center justify-content-center align-items-stretch">
            <div class="col-md-4 mb-4 d-flex flex-column h-100">
                <i class="bi bi-speedometer2 fs-1"></i>
                <h5 class="mt-3">Dashboard Intuitivo</h5>
                <p>Acompanhe seus dados financeiros de forma visual e simples.</p>
            </div>
            <div class="col-md-4 mb-4 d-flex flex-column h-100">
                <i class="bi bi-graph-up fs-1"></i>
                <h5 class="mt-3">Gráficos Dinâmicos</h5>
                <p>Visualize sua evolução financeira com gráficos claros e personalizados.</p>
            </div>
            <div class="col-md-4 mb-4 d-flex flex-column h-100 text-center">
                <img src="{{ asset('img/j.PNG') }}" alt="Imagem Suporte" style="width: 80px; height: 80px;" class="img-fluid rounded-circle mb-2 mx-auto d-block">
                
                <h5 class="mt-2 mb-1">Suporte Especializado</h5>
                
                <a href="https://wa.me/5519988630793" target="_blank" class="text-decoration-none d-inline-block small">
                    <i class="bi bi-whatsapp me-1 text-success fs-6"></i>
                    (19) 98863-0793
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div style="text-align: center;">
        <a href="{{ route('registro') }}" class="cta-btn">Crie sua conta gratuitamente</a>
    </div>

@endsection
