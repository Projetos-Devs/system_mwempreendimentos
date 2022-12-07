@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    <div style="position:relative;">
        <img class="w-100" style="height: 370px; margin-top: -50px; object-fit: cover; filter: brightness(55%);"
            src="/images/toldo.jpg">

            <div class="container mt-3">
                <p class="text-white fs-5" style="position: relative; top: -155px; left: 40px;">Ornamente seu evento</p>
                <h1 class="text-white" style="position: relative; top: -180px; left: 40px; font-size:3.5em">Produtos</h1>
            </div>
    </div>

    <div class="container border border-2 pt-1 pb-1 p-5 rounded-4 mb-4 shadow" style="background-color: #2D2D3C; margin-top: -100px;">
        <h2 class="fs-1 text-center text-light">Conheça nossos serviços</h2>
    </div>

    <div class="container">

        <div class="container row px-2">

            @foreach ( $produtos as $produto)
            
            <div class="col-4 text-center p-2 d-flex align-items-stretch" style="width: 250px;">
                <a href="{{route('servicos.detalhes', $produto->id)}}" class="text-decoration-none">
                <div id="imagehover" class="container-fluid rounded-4 bg-dark p-3">

                    <div class="align-middle" style="">
                        <img src="/storage/produtos/{{ $produto->foto }}" alt="{{ $produto->nome }}" class="figure-img img-fluid" style="width: 200px; height:150px;" alt="banheiro">
                    </div>

                    <p class="text-light text-break">{{$produto->nome}}</p>
                </div>
            </a>
            </div>
            @endforeach
            
           
            
            {{--<div class="col-sm-4" style="">
                <img class="" src="/images/banheiro_quimico.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/camarim.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/diciplinadores.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/foto_aluminio_p30.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/foto_palco_14x10.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/foto_palco_14x12.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/gerador.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/palco_praticavel.png">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/placa_fechamento.png">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/tenda_5x5.jpg">
            </div>
            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/tenda_6x6.jpg">
            </div>

            <div class="col-4" style="">
                <img style="height: 250px; width: 250px;" src="/images/toldo_4x4.jpeg">
            </div> --}}
        </div>
    </div>
        
@endsection
