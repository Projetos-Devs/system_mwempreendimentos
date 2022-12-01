@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
<h1>Bem Vindo ao<br>
Site MW
Empreendimentos</h1>
<a href="{{route('orcamentos.index')}}">Solicite seu orçamento</a><br>
<a href="{{route('telas_admin.clientes')}}">Detalhes dos Clientes</a><br>
<a href="{{route('telas_admin.orcamentos')}}">Detalhes dos Orcamentos</a><br>
<a href="{{route('produtos.index')}}">Detalhes dos Produtos</a>
@endsection