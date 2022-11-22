<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="/images/icon.png">
    <link rel="stylesheet" href="/css/icons/bootstrap-icon.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">


    <style type="text/css">
        nav {
            /*class="navbar-dark bg-dark"*/
            background-color: black;
            background-image: linear-gradient(to right, #21172A, #18141A, transparent, #131614, #182B1D, #182B1D)
        }
    </style>

</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg mb-5">
        <div class="container">
            <a href="{{ route('home.index') }}"><img src="/images/logo_white.png" height="30"
                    alt="MWEmpreendimentos"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link text-white" href="">Serviços</a>

                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{route('contato.index')}}">Contatos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="">Sobre</a>
                    </li>

                    <li style="margin-left: 30rem;" class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login.index') }}">Entrar</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link text-white border border-2 border-white rounded-3 pb-0 pt-0 mt-2"
                            href="{{ route('usuario.create') }}">Inscrever-se</a>
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
