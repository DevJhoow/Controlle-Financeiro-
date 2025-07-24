@extends('layout')
@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <h2>Bem-vindo, {{ $user->name }}!</h2>

    <p class="text-muted">Essa é sua área pessoal.</p>

</div>
@endsection
