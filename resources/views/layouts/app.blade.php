<html>
    <head>
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>
        <header>
        <!--Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <a class="navbar-brand" href="{{ url('/') }}">Inazuma Eleven</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Jugadores') }}">Jugadores</a>
                    </li>
                    @if (auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Añadir') }}">Añadir</a>
                    </li>
                    <li class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="{{ route('CerrarSesion') }}">Cerrar Sesion (<?php echo auth()->user()->name; ?>)</a>
                    </li>  
                    @else
                    <li class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="{{ url('/Login') }}">Iniciar Sesion
                        </a>
                    </li>
                    @endif
                </ul>
                </div>
            </nav>
        </header>

    <!-- Main -->
    <main class="px-5 pt-5">
        <div>
            @yield('content')
        </div>
    </main>
    </body>
</html>