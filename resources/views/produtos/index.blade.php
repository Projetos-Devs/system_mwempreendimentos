@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')


<table class="table table-responsive">
    <thead class="table-dark">
        <a href="{{ route('produtos.create')}}" class="btn btn-primary m-4 rounded-circle"><i class="bi bi-plus fs-4"></i></a>
        <tr class="text-center rounded-4" style="margin-right: 50px; margin-left: 50px ">
            <th>Id</th>
            <th>Nome do produto</th>
            <th>Descrição do produto</th>
            <th>Tipo</th>
            <th>Quantidade no estoque</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            
            <tr class="text-center">
                <td class="align-middle">{{$produto->id}}</td>
                <td class="align-middle">{{$produto->nome}}</td>
                <td class="align-middle">{{$produto->descricao}}</td>
                <td class="align-middle">{{$produto->tipo}}</td>
                <td class="align-middle">{{$produto->quantidade_estoque}}</td>
                <td class="align-middle text-center"> 
                  
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
