@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')


    <div style="position:relative; margin-bottom: -100px;">
        <img class="w-100" style="height: 370px; margin-top: -50px; object-fit: cover; filter: brightness(55%);"
            src="/storage/produtos/{{ $produto->foto }}">

        <div class="container ">
            <h1 class="text-white fs-4" style="position: relative; top: -150px; left: 40px;">Produtos</h1>
            <p class="text-white text-capitalize" style="position: relative; top: -155px; left: 40px; font-size:3.5em">
                {{ $produto->nome }}</p>
        </div>
    </div>



    {{-- <div class="container border border-2  pt-1 pb-5 p-5 rounded-4 bg-dark mb-5 mt-4 shadow"> --}}

    <div class="container">

        <form method="POST" action="{{ route('servicos.update', $produto->id) }}" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <h2 class="text-center" style="color: black;" aria-valuetext="{{ $produto->nome }}">
                {{ $produto->nome }}</h2>
            <hr style="color: white;">

            {{-- <div class="row fs-5 p-4 pb-1"> --}}

                <div class="text-center px-3">
                    <img src="/storage/produtos/{{ $produto->foto }}" class="figure-img img-fluid rounded" style="width: 900px; height:450px;">
                </div>

                <div class="">
                    <p class="fs-3 text-break mt-5" style="color: black;">Classificação: {{ $produto->descricao }}</p>
                    <p class="fs-6 text-break" style="color: black;" aria-valuetext="{{ $produto->quantidade_estoque }}">
                        Quantidade: {{ $produto->quantidade_estoque }}</p>
                    <hr style="color: black;">
                    <div class="mb-3">
                        <p class="text-break" style="color: black;" aria-valuetext="{{ $produto->produto_info }}">
                            Descrição: {{ $produto->produto_info }} </p>
                    </div>
                    <hr style="color: black;">
                    <div class="text-center align-middle mb-3">
                        <a href="{{ route('orcamentos.index') }}" class="btn btn-primary ps-4 pe-4 fs-4 mt-4"> Solicite um
                            Orçamento</a>
                    </div>
                </div>

            {{-- </div> --}}

        </form>

    {{-- </div> --}}

@endsection
