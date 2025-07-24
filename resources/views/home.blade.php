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
            <div class="menu-btn"><i class="bi bi-bar-chart-line-fill"></i><br>Gráficos</div>
            <div class="menu-btn"><i class="bi bi-file-earmark-text-fill"></i><br>Relatórios</div>
            <div class="menu-btn"><i class="bi bi-wallet2"></i><br>Fluxo de Caixa</div>
            <div class="menu-btn"><i class="bi bi-journal-check"></i><br>Plano de Contas</div>
            <div class="menu-btn receita"><i class="bi bi-cash-coin"></i><br>Lançar Receitas</div>
            <div class="menu-btn despesa"><i class="bi bi-cash"></i><br>Lançar Despesas</div>
    </div>

    <!-- Funcionalidades -->
    <section class="features">
            <h3 style="text-align:center; margin-bottom: 30px;">Funcionalidades que você vai Surpreender</h3>
            <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="bi bi-speedometer2"></i>
                <h5 class="mt-3">Dashboard Intuitivo</h5>
                <p>Acompanhe seus dados financeiros de forma visual e simples.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-graph-up"></i>
                <h5 class="mt-3">Gráficos Dinâmicos</h5>
                <p>Visualize sua evolução financeira com gráficos claros e personalizados.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-people"></i>
                <h5 class="mt-3">Suporte Especializado</h5>
                <p>Equipe pronta para tirar dúvidas e ajudar no seu planejamento.</p>
            </div>
            </div>
    </section>

    <!-- Depoimentos -->
    <section class="testimonials">
        <h3 style="text-align:center; margin-bottom: 20px;">O que dizem sobre nós</h3>
        <blockquote>
        <p>"Com o painel financeiro da FinanPro, consegui organizar minhas finanças e estou muito mais tranquilo no fim do mês."</p>
        <footer>Maria Silva, Empresária</footer>
        </blockquote>
        <blockquote>
        <p>"A equipe especializada me ajudou a planejar meus investimentos de forma simples e prática."</p>
        <footer>João Pereira, Autônomo</footer>
        </blockquote>
    </section>

    <!-- CTA -->
    <div style="text-align: center;">
        <a href="{{ route('registro') }}" class="cta-btn">Crie sua conta gratuitamente</a>
    </div>

@endsection
