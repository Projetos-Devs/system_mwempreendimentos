<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="" href="" type="">
    <link rel="stylesheet" href="/css/icons/bootstrap-icon.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a href="/"><img src="/images/layout/logo_white.png" height="30" alt="MWEmpreendimentos"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link" href="">Sobre</a>

                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="">Serviços</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-3">
        @yield('conteudo')
    </div>



</body>

</html>

