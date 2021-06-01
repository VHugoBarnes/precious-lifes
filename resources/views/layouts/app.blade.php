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
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/precious-lifes-logo.png') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        @guest
                        <li class="nav-item"><a class="nav-link" href="#services">¿CÓMO DONAR?</a></li>
                        @endguest
                        @guest
                        <li class="nav-item"><a class="nav-link" href="#portfolio">AYUDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">¿QUIÉNES SOMOS?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">EQUIPO PL</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">CONTACTO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('registro') }}">REGISTRATE COMO USUARIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('registro-veterinario') }}">REGISTRATE COMO VETERINARIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">INICIA SESIÓN</a></li>
                        @endguest
                        @auth
                            @usuario('Usuario')
                            <li class="nav-item"><a class="nav-link" href="{{ route('animales') }}">DONAR</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('panel-usuario') }}">PERFIL</a></li>
                            @elseusuario('Veterinario')
                            <li class="nav-item"><a class="nav-link" href="{{ route('dar-alta') }}">DAR DE ALTA</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('panel-veterinario') }}">PERFIL</a></li>
                            @endusuario
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
        <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    Copyright &copy; Your Website
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());

                    </script>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Políticas de privacidad</a>
                    <a class="link-dark text-decoration-none" href="#!">Términos de uso</a>
                </div>
            </div>
        </div>
    </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>