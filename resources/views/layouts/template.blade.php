<!doctype html>
<html lang="es" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guardería | Dashboard</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>

<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="{{ url('/') }}" class="sidebar-brand">
            Guardería
        </a>
        <div class="sidebar-subtitle">
            Panel administrativo
        </div>
    </div>

    <div class="sidebar-menu">

        <div class="sidebar-section">Principal</div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                    🏠 Inicio
                </a>
            </li>
        </ul>

        <div class="sidebar-section">Administración</div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('abonos*') ? 'active' : '' }}" href="{{ url('/abonos') }}">
                    💰 Abonos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('registro_cuentas*') ? 'active' : '' }}" href="{{ url('/registro_cuentas') }}">
                    🧾 Registro de cuentas
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('centros*') ? 'active' : '' }}" href="{{ url('/centros') }}">
                    🏫 Centros
                </a>
            </li>
        </ul>

        <div class="sidebar-section">Niños y familias</div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('ninios*') ? 'active' : '' }}" href="{{ url('/ninios') }}">
                    🧒 Niños
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('familiares*') ? 'active' : '' }}" href="{{ url('/familiares') }}">
                    👨‍👩‍👧 Familiares
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('personas*') ? 'active' : '' }}" href="{{ url('/personas') }}">
                    👤 Personas
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('parentezcos*') ? 'active' : '' }}" href="{{ url('/parentezcos') }}">
                    🔗 Parentescos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('bajas_ninios*') ? 'active' : '' }}" href="{{ url('/bajas_ninios') }}">
                    📋 Bajas de niños
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('alergias*') ? 'active' : '' }}" href="{{ url('/alergias') }}">
                    ⚕️ Alergias
                </a>
            </li>
        </ul>

        <div class="sidebar-section">Alimentación</div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('menus*') ? 'active' : '' }}" href="{{ url('/menus') }}">
                    🍽️ Menús
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('platos*') ? 'active' : '' }}" href="{{ url('/platos') }}">
                    🥗 Platos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('ingredientes*') ? 'active' : '' }}" href="{{ url('/ingredientes') }}">
                    🥕 Ingredientes
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('registro_comidas*') ? 'active' : '' }}" href="{{ url('/registro_comidas') }}">
                    📝 Registro de comidas
                </a>
            </li>
        </ul>

    </div>

    <div class="sidebar-footer">
        Sistema Guardería
        <br>
        <small>v1.0</small>
    </div>
</aside>

<div class="main-wrapper">

    <header class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-outline-secondary btn-sm mobile-menu-btn" type="button" onclick="toggleSidebar()">
                ☰
            </button>

            <div>
                <h5 class="mb-0">Panel de control</h5>
                <small class="text-muted">Sistema de gestión de guardería</small>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">

            <form class="d-none d-md-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar...">
                <button class="btn btn-primary-custom" type="submit">
                    Buscar
                </button>
            </form>

            <ul class="navbar-nav flex-row align-items-center gap-2">

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-primary btn-sm" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown"
                           class="nav-link dropdown-toggle d-flex align-items-center text-dark"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                Perfil
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form"
                                  action="{{ route('logout') }}"
                                  method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </header>

    <main class="content">
        <div class="dashboard-card">
            @yield('content')
        </div>
    </main>

</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('show');
    }

    document.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        const button = document.querySelector('.mobile-menu-btn');

        if (
            window.innerWidth <= 768 &&
            sidebar.classList.contains('show') &&
            !sidebar.contains(event.target) &&
            !button.contains(event.target)
        ) {
            sidebar.classList.remove('show');
        }
    });
</script>

</body>
</html>