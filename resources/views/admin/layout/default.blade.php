<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a href="{{route('dashboards.index')}}"><img src="/images/logo_white.png" height="50"
                    alt="MWEmpreendimentos"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('dashboards.index')}}">Home</a>
                    </li>
                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('produtos.create') }}">Cadastrar Produto</a></li>
                            <li><a class="dropdown-item" href="{{ route('produtos.detalhes') }}">Listar Produtos</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('clientes.detalhescliente')}}">Clientes</a>
                    </li> --}}
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('orcamentos.detalhesorcamento')}}">Orçamentos</a>
                    </li>
                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Olá {{auth()->user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('login.logout')}}">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-3 p-4">
        @yield('conteudo')
    </div>

    <footer class="container-fluid bg-light text-center mt-3 mb-3">
        <span>
            Sistema desenvolvido na disciplina de Programação Avançada do curso de Sistema de Informação<br>
            Semestre letivo: 2022.2<br>
            Centro Universitário UniRios<br><br>
            Versão 1.0 do sistema
        </span>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>