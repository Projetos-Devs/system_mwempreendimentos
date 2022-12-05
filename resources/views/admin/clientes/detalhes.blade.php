@extends('admin.layout.default')

@section('title', 'Empreendimentos')

@section('conteudo')

<div>
    <h2 class="text-white rounded-4 p-2" style="background-color: #2D2D3C; text-align: center; margin-right: 50px; margin-left: 50px ">Clientes</h2>
</div>    


@if ($clientes->count() == 0)
    

<h3 class="mt-4 text-center">Voce não possui clientes cadastrados!</h3>

@else

@foreach ($clientes as $cliente)


<div class="rounded-4 p-2 row mb-3" style="background-color: #2D2D3C; margin-left: 50px; margin-right: 50px; text-align: center;">
    <h2 class="text-white p-0 m-0 pt-3" style="text-align: center;">
         {{$cliente->nome}}
    </h2>
    <h2 class="text-white pb-3" style="text-align: center; font-size: 1rem;">_____________________________________________________________________________________________________________________________________________</h2>

    <div class="form-group col-6 text-white pb-4" style="text-align: center;">
        <label style="font-size: 1.5rem">Email: {{$cliente->email}}</label>
    </div>

    <div class="form-group col-6 text-white pb-4">
        <label style="font-size: 1.5rem">Telefone: {{$cliente->telefone}}</label>
    </div>

    <div class="form-group col-6 text-white pb-4">
        <label style="font-size: 1.5rem">CPF: {{$cliente->cpf}}</label>
    </div>

    <div class="form-group col-6 text-white pb-4">
        <label style="font-size: 1.5rem">CNPJ: {{$cliente->cnpj}}</label>
    </div>

    <div class="form-group text-white text-center pb-4">
        <label style="font-size: 1.5rem">Endereço: {{$cliente->endereco}}</label>
    </div>

</div>

@endforeach

@endif

@endsection