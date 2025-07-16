<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> @yield('title') </title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/paginaInicial.css') }}">
    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>
    <header class="d-flex justify-content-between align-items-center px-4 py-3">
        <h1 class="m-0 fs-4 text-white">
            Controle Financeiro - FinanPro
            <i class="bi bi-currency-dollar me-2"></i>
        </h1>

        <div>
            <a href="" class="btn btn-light btn-sm me-2">
            <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </a>
            <a href="" class="btn btn-outline-light btn-sm">
            <i class="bi bi-person-plus me-1"></i> Criar Conta
            </a>
        </div>
    </header>

<main>

    @yield('content')

</main>

<footer>
    <p>&copy; 2025 FinanPro - Todos os direitos reservados</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
