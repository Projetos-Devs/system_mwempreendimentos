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
    <link rel="stylesheet" href="/css/style.css">




    <style type="text/css">
        nav {
            background-color: black;
            background-image: linear-gradient(to right, #21172A, #18141A, transparent, #131614, #182B1D, #182B1D)
        }

        footer {

            background-color: black;
            background-image: linear-gradient(to right, #21172A, #18141A, transparent, #131614, #182B1D, #182B1D);

        }

        #imagehover{

            transition: all 400ms ease-in-out;
            filter: none;

        }


        #imagehover:hover{

            transition: all 400ms ease-in-out;
            filter: brightness(55%);
        }


    </style>

</head>

<body class="bg-light">


    <nav class="navbar navbar-expand-lg mb-5 pb-3">
        <div class="container pt-3">
            <a href="{{ route('home.index') }}"><img src="/images/logo_white.png" height="50"
                    alt="MWEmpreendimentos"></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav menu">
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{ route('sobre.index') }}">Sobre</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{route('servicos.index')}}" role="button">Produtos</a>
                    </li>

                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{ route('orcamentos.index') }}">Orçamento</a>
                    </li>
                    {{-- <li class="nav-item px-3">
                        <a class="nav-link text-white" href="{{ route('contatos.index') }}">Contato</a>
                    </li> --}}


                </ul>
            </div>
        </div>
    </nav>


    <div class="mb-3">
        @yield('conteudo')
    </div>


    <footer class="mt-5 text-center text-white pt-4 pb-5">
        <span>
            Sistema desenvolvido na disciplina de Programação Avançada do curso de Sistema de Informação<br>
            Semestre letivo: 2022.2<br>
            Centro Universitário UniRios<br><br>
            Versão 1.0 do Sistema
        </span>
    </footer>

    <a class="text-black" href="https://web.whatsapp.com/send?phone=5575991946535" target="_blank">
    <i class="bi bi-whatsapp" id="whatsapp"></i>
    </a>

<script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>
