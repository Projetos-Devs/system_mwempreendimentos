@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
<h1>Bem Vindo ao<br>
Site MW
Empreendimentos</h1>
<a href="{{route('orcamentos.index')}}">Solicite seu orçamento</a>
<a href="{{route('tela_admin.index')}}">tela adm</a>
<a href="{{route('produtos.index')}}">tela produtos</a>
@endsection