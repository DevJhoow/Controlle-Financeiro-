@extends('layout')
@section('title', 'Plano de Contas')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Plano de Contas</h2>

    <p class="alert alert-info text-center">
        Esta tela é baseada em seus dados reais. Aqui você pode editar ou excluir itens de receita, despesa e planejamento.
    </p>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <section class="row g-4">
        {{-- Receita --}}
        <section class="col-md-6">
            <article class="card shadow-sm">
                <header class="card-header bg-primary text-white">Contas de Receita</header>
                <ul class="list-group list-group-flush">
                    @foreach ($receitas as $receita)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $receita->descricao }}
                            <span>
                               <button class="btn btn-sm btn-warning btn-edit" style="background:none; border:none;
                                    data-id="{{ $receita->id }}"
                                    data-descricao="{{ $receita->descricao }}">
                                    <i class="bi bi-pencil me-1"></i>
                               </button>

                                <form action="{{ route('plano_itens.destroy', $receita->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm p-0 btn-delete" style="background:none; border:none;" data-id="{{ $receita->id }}" data-descricao="{{ $receita->descricao }}">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                </form>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </article>
        </section>

        {{-- Despesa --}}
        <section class="col-md-6">
            <article class="card shadow-sm">
                <header class="card-header bg-danger text-white">Contas de Despesa</header>
                <ul class="list-group list-group-flush">
                    @foreach ($despesas as $despesa)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $despesa->descricao }}
                            <span>
                                {{-- Botões para despesa aqui, se quiser --}}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </article>
        </section>

        {{-- Planejamento --}}
        <section class="col-12">
            <article class="card shadow-sm">
                <header class="card-header bg-success text-white">Planejamento e Metas</header>
                <ul class="list-group list-group-flush">
                    @foreach ($planejamentos as $plano)
                       <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $plano->descricao }}
                            <span>
                                {{-- Botões para planejamento aqui, se quiser --}}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </article>
        </section>
    </section>
    
</div>

<!-- Modal edição -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form id="editForm" method="POST">
        @csrf
        @method('PUT')

        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="descricaoInput" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricaoInput" class="form-control" rows="3" required></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal confirmação exclusão -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')

        <div class="modal-header">
          <h5 class="modal-title" id="confirmDeleteLabel">Confirmação de Exclusão</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>

        <div class="modal-body">
          <p>Você tem certeza que deseja excluir este item?</p>
          <p><strong> <span id="deleteDescricao"></span> </strong> </p>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Sim, excluir</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<div class="mt-3">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Voltar para o Dashboard
    </a>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Modal edição
    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
    const descricaoInput = document.getElementById('descricaoInput');
    const editForm = document.getElementById('editForm');

    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const descricao = this.dataset.descricao;

            descricaoInput.value = descricao;
            editForm.action = `/plano_itens/${id}`;

            editModal.show();
        });
    });

    // Modal exclusão
    const confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
    const deleteForm = document.getElementById('deleteForm');
    const deleteDescricao = document.getElementById('deleteDescricao');

    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function () {
            const itemId = this.dataset.id;
            const descricao = this.dataset.descricao;

            deleteForm.action = `/plano_itens/${itemId}`;
            deleteDescricao.textContent = descricao;

            confirmDeleteModal.show();
        });
    });
});
</script>
@endsection
