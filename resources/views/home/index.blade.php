@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
<h1>Bem Vindo ao<br>
Site MW
Empreendimentos</h1>
<a href="{{route('dashboards.index')}}">Área do Admin</a><br>
<a href="{{route('servicos.detalhes')}}">detalhes</a><br>
@endsection