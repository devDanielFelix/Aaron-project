<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="style.css">

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
                        <a href="/" class="nav-link">Produtos</a>
                    </li>
                    <li class="nav-iten">
                        <a href="/" class="nav-link">Contatos</a>
                    </li>
                    <li class="nav-iten">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-iten">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
                </div>
        </nav>
    </header>
    @yield('contet')
    <footer>
        <p>Psyduck - Artigos Esportivos &copy 2024</p>
    </footer>
</body>

</html>
