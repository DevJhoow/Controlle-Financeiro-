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
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header class="d-flex justify-content-between align-items-center px-4 py-3">
        <h1 class="m-0 fs-4 text-white">
            <a href="{{ route('home.index') }}" class="text-white text-decoration-none custom-hover">
                Controle Financeiro - FinanPro <i class="bi bi-currency-dollar me-2"></i>
            </a>
        </h1>
<div>
    @auth
        <div class="dropdown">
            <a class="btn btn-outline-light btn-sm dropdown-toggle d-flex align-items-center"
               href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle me-2"></i>
                {{ Auth::user()->name }}
            </a>

            <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="userDropdown">
                <li>
                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{ route('logout') }}" method="GET" class="d-inline">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-1"></i> Sair
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    @else
        <a href="{{ route('login') }}" class="btn btn-light btn-sm me-2">
            <i class="bi bi-box-arrow-in-right me-1"></i> Login
        </a>
        <a href="{{ route('registro') }}" class="btn btn-outline-light btn-sm">
            <i class="bi bi-person-plus me-1"></i> Criar Conta
        </a>
    @endauth
</div>


    </header>

<main>

    @yield('content')
    @yield('scripts')
    <!-- Gráfico -->
</main>

<footer>
    <p>&copy; 2025 FinanPro - Todos os direitos reservados</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
