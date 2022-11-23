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
    <div class="container rounded-4" style="background-color: #2D2D3C; width: 750px; margin-top: 30px;">
        <h2 class="text-white p-0 m-0 pt-3" style="text-align: center">Cadastro</h2>
        <h2 class="text-white p-0 m-0 pb-1" style="text-align: center; font-size: 1rem;">__________________________________________________________________________________________________________</h2>

    <form class="row g-4" style="margin: 0 auto;">
        @csrf
            
        <div class=" form-group col-6">
            <label for="name" class="form-label fs-5 fs-5 text-white">Nome</label>
            <input type="text" class="form-control form-control-lg bg-light" id="name" name="name" required>
        </div>

        <div class="form-group col-6">
            <label for="senha" class="form-label fs-5 fs-5 text-white">Senha</label>
            <input type="password" class="form-control form-control-lg bg-light" id="password" name="senha" required>
        </div>

        <div class="form-group col-6">
            <label for="email" class="form-label fs-5 fs-5 text-white">E-mail</label>
            <input type="text" class="form-control form-control-lg bg-light" id="email" name="email" required>
        </div>
    
        <div class="form-group col-6">
            <label for="senha" class="form-label fs-5 fs-5 text-white">Confirmar Senha</label>
            <input type="password" class="form-control form-control-lg bg-light" id="password" name="senha" required>
        </div>
    </form>
        <div class="py-4">
            <button type="submit" class="btn btn-success btn-lg" style="width: 220px; margin-left: 250px;">Confirmar</button>
    </div>
    </div>
</body>
</html>