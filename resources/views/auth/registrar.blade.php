@extends('layout')
@section('title', 'Registro')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Criar Conta</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('registro') }}">
        @csrf
        <div class="mb-3">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>
@endsection
