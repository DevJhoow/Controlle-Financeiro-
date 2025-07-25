@extends('layout')
@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-80">
    <div class="card shadow-sm p-4" style="min-width: 320px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">
                <i class="bi bi-person-circle me-2"></i>Login
            </h5>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
                    </button>
                    <a href="{{ route('home.index') }}" class="btn btn-link btn-sm">Cancelar</a>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
