@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')


    <div class="container text-black">

        <h3>Informe o seu CPF ou CNPJ</h3>

            <form method="" action="" enctype="multipart/form-data">

                
                <div class=" col-sm-6 pt-3 mb-4">

                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control form-control-lg bg-light" value="">

                    <label for="cnpj" class="form-label">CNPJ</label>
                    <input type="text" name="cnpj" class="form-control form-control-lg bg-light" value="">
                        <a class="text-decoration-none pt-1" href="{{route('clientes.create')}}"><p>Não possui registro? registre-se aqui</p></a>
                </div>

            <div class="py-4">
                <button type="submit" class="btn btn-lg"
                    style="width: 220px; background-color: #5EB7CB">Confirmar</button>
            </div>

        </form>
</div>
@endsection
