@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
<table class="table table-responsive">
    <thead class="table-dark">
        <tr class="text-center rounded-4" style="margin-right: 50px; margin-left: 50px ">
            <th>Id</th>
            <th>Tipo de Serviço</th>
            <th>Endereço</th>
            <th>Data Início</th>
            <th>Data Término</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Serviços</th>
        </tr>
    </thead>
    <tbody>
        @foreach ()
            
            <tr class="text-center">
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle text-center"> 
                  
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
