<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empreendimentos</title>
    <link rel="icon" href="/images/icon.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/icons/bootstrap-icons.css ">
    <style>
        body {
            background-color: black;
            background-image: linear-gradient(to right, #822F9A, #5B338C, #453A88, #3E418A, #416CA1)
        }
    </style>
</head>

<body>
    <div class="container" style="max-width: 250px;">
        <img class="img-fluid mt-5" src="/images/logo_white.png">
    </div>

    <div class="container rounded-4 px-4 pb-4 text-white mb-4" style="background-color: #2D2D3C; margin-top: 30px; width: 800px">
        <h2 class="text-white p-0 m-0 pt-3" style="text-align: center">Cadastro</h2>
        <h2 class="text-white p-0 m-0 pb-1" style="text-align: center; font-size: 1rem; margin-left: 20px;">
            __________________________________________________________________________________________________________________</h2>

        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <div class="row pt-3">
                <div class="col-sm-6 mb-3 pt-2">
                    <label class="form-label fs-5 fs-5" for="name">Nome</label>
                    <input id="name" name="name" type="text" class="form-control form-control-lg" required>
                </div>
                <div class="col-sm-6 mb-3 pt-2">
                    <label class="form-label fs-5 fs-5" for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control form-control-lg" required>
                </div>
                <div class="col-sm-6 mb-3 pb-3">
                    <label class="form-label fs-5 fs-5" for="password">Senha</label>
                    <input id="password" name="password" type="password" class="form-control form-control-lg bg-light" required>
                </div>
                <div class=" form-group col-sm-6">
                    <label for="tipo" class="form-label fs-5 fs-5">Tipo do usuário</label>
                    <select id="tipo" name="tipo" id="tipo" class="form-select form-select-lg bg-light" required>
                        <option value="">--</option>
                        <option value="simples">Simples</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="container row " style="margin-left: -2px;">
                    <div class="col text-end">
                        <a href="{{ route('login.index') }}" class="btn btn-danger btn-lg col-md-4">Cancelar</a>
                    </div>
                    <div class="col text-start">
                    <button type="submit" class="btn btn-success btn-lg col-md-4 align-middle">Confirmar</button>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>
