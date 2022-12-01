@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

<div>
    <h2 class="text-white rounded-4 p-2" style="background-color: #2D2D3C; text-align: center; margin-right: 50px; margin-left: 50px ">Clientes</h2>
</div>
@foreach ($clientes as $cliente)
<div class="rounded-4 p-2 row mb-3" style="background-color: #2D2D3C; margin-left: 50px; margin-right: 50px; text-align: center;">
    <h2 class="text-white p-0 m-0 pt-3" style="text-align: center;">
         {{$cliente->nome}}
    </h2>
    <h2 class="text-white pb-3" style="text-align: center; font-size: 1rem;">______________________________________________________________________________________________________________________________________________________________________________</h2>

    <div class="form-group col-6 text-white pb-3" style="text-align: center;">
        <label style="font-size: 1.5rem">Email: {{$cliente->email}}</label>
    </div>
    
    <div class="form-group col-6 text-white">
        <label style="font-size: 1.5rem">Empresa:</label>
    </div>

    <div class="form-group col-6 text-white">
        <label style="font-size: 1.5rem">Telefone: {{$cliente->telefone}}</label>
    </div>

    <div class="form-group col-6 text-white">
        <a href="#" class="btn btn-lg align-middle" style="width: 220px; margin-left: 65px; background-color: #90FFE4;">Orçamentos: </a>
    </div>

</div>
@endforeach
@endsection