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

        <img class="img-fluid mt-5" src="images/logo_white.png">

    </div>

    <div class="container pb-3 px-4 text-white rounded-4 shadow-lg"
        style=" width: 400px; margin-top: 30px; background-color: #2D2D3C;">

        <form action="">

            <div class="row">

                <div class="col-12 mb-3 pt-4">
                    <label class="form-label fs-5 fs-5" for="email">Email</label>
                    <input name="email" type="email" class="form-control form-control-lg">
                </div>

                <div class="col-12 mb-3 pb-3">
                    <label class="form-label fs-5 fs-5" for="senha">Senha</label>
                    <input name="senha" type="password" class="form-control form-control-lg">
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-success btn-lg align-middle" style="width: 220px; margin-left: 65px; ">Entrar</button>
                <p style="margin-left: 65px;">Não possui conta? <a class="text-info text-decoration-none" href="{{ route('usuario.create')}}">Cadastre-se</a></p>
            </div>

        </form>
    </div>

</body>

</html>
