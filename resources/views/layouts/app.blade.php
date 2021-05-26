<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Precious Lifes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/huella.png') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('img/precious-lifes-logo.png') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        @guest
                        <li class="nav-item"><a class="nav-link" href="#services">¿CÓMO DONAR?</a></li>
                        @endguest
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('animales') }}">DONAR</a></li>
                        @endauth
                        <li class="nav-item"><a class="nav-link" href="#portfolio">AYUDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">¿QUIÉNES SOMOS?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">EQUIPO PL</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">CONTACTO</a></li>
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('registro') }}">REGISTRATE COMO USUARIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('registro-veterinario') }}">REGISTRATE COMO VETERINARIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">INICIA SESIÓN</a></li>
                        @endguest
                        @auth
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">CERRAR SESIÓN</a></li> --}}
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>