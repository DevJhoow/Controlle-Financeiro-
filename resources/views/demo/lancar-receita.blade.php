@extends('layout')
@section('title', 'Demonstração Lançar Receitas')
    
@section('content')

    <div class="container mt-4">
        <h2 class="text-center mb-4">Demonstração: Lançar Receitas</h2>

        <div class="card p-4 shadow">
            <form>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição da Receita</label>
                    <input type="text" id="descricao" class="form-control" placeholder="Ex: Venda de produto A">
                </div>

                <div class="mb-3">
                    <label for="valor" class="form-label">Valor Recebido</label>
                    <input type="number" id="valor" class="form-control" placeholder="Ex: 250.00">
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria (Plano de Contas)</label>
                    <select id="categoria" class="form-select">
                        <option selected disabled>Selecione uma categoria</option>
                        <option>Venda de Produtos</option>
                        <option>Prestação de Serviços</option>
                        <option>Investimentos</option>
                        <option>Recebimento de Clientes</option>
                        <option>Outros</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="data" class="form-label">Data da Receita</label>
                    <input type="date" id="data" class="form-control">
                </div>
            </form>
        </div>

        <div class="alert alert-info mt-4">
            <strong>Dica:</strong> Categorizar suas receitas ajuda a entender de onde vem seu lucro e tomar decisões mais inteligentes para o crescimento do negócio.
        </div>

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
