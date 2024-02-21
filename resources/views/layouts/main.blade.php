<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- styles -->
    <link rel="stylesheet" href="styles/styles.css">

</head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-ligth">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="img/psyduck.png" alt="Icon">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-iten">
                            <a href="/produtos" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-iten">
                            <a href="/contatos" class="nav-link">Contatos</a>
                        </li>
                        <li class="nav-iten">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-iten">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                    <div id="search-container">
                        <form action="/" method="GET">
                            <input type="text" id="search" name="search" autocomplete="off" class="form-control" placeholder="Pesquisa Psyduck Store">
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        @yield('contet')
       <footer>
            <p>Psyduck Store - Artigos Esportivos &copy 2024</p>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
