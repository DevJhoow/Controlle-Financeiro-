@extends('layout')
@section('title', 'Demonstração de Lançar Despesas')

@section('content')

    <section class="container mt-5">
        <h2 class="text-center mb-4 text-danger">Lançar Despesas</h2>

        <form>
            <label for="data-despesa" class="form-label">Data</label>
            <input type="date" id="data-despesa" class="form-control mb-3">

            <label for="descricao-despesa" class="form-label">Descrição</label>
            <input type="text" id="descricao-despesa" class="form-control mb-3" placeholder="Ex: Compra de insumos">

            <label for="valor-despesa" class="form-label">Valor (R$)</label>
            <input type="number" id="valor-despesa" class="form-control mb-3" placeholder="Ex: 250.00">

            <label for="categoria-despesa" class="form-label">Categoria</label>
            <select id="categoria-despesa" class="form-select mb-4">
                <option>Matéria-prima</option>
                <option>Contas Fixas</option>
                <option>Frete</option>
                <option>Salários</option>
                <option>Outros</option>
            </select>
        </form>

        <p class="text-muted text-center mb-4">
            As despesas são parte essencial da gestão financeira. Atenção aos gastos evita surpresas inesperadas. 
            Com planejamento, você garante que nada falte nos momentos importantes e mantém o controle para crescer com segurança.
        </p>
        
         <div class="mt-3">
            <a href="{{ route('registro') }}" class="btn btn-success me-2">
                <i class="bi bi-person-plus-fill"></i> Criar minha conta agora
            </a>
            <a href="{{ route('home.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Voltar
            </a>
        </div>

    </section>

@endsection
