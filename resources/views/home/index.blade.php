@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
<div class="" style="margin-top:-49px; max-width: 100%; position:relative;">
    <img src="images/layout/image.png" class="" style="max-width: 100%" alt="">
</div>
<div class="text-black p-4 mt-2 mb-2" >
    <h1>Bem vindo ao Site <br> MWEmpreendimentos</h1>
</div>
<div class="bg-dark">
    <div class="container text-light">
        <p class="fs-2 pt-3 pb-3">Conheça os nossos produtos!</p>
        <div class="row">
            <div class="col">
                <div id="carouselExampleDark" class="mb-5 carousel slide" data-bs-ride="carousel" style="max-width: 700px">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/layout/toldo.png" class="d-block w-100 rounded-2 border boder-2" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Toldos</h5>
                            <p>Toldos? aqui temos!</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/layout/gerador.png" class="d-block w-100 rounded-2 border boder-2" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Maquinas</h5>
                            <p>Encontre dentre variadas máquinas a exata para seu evento!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/layout/camarim.png" class="d-block w-100 rounded-2 border boder-2" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Outras estruturas</h5>
                        <p>Veja nossas outras estruturas!</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col ps-4">
                <p class="fs-3">Veja todo o que temos a oferecer!<br>Click e descubra todos os produtos que temos!!</p>
                <a href="{{ route('servicos.index') }}" class="ps-4 pe-4 btn btn-info btn-lg align-middle"> Produtos </a>
            </div>
        </div>
    </div>
    
</div>

@endsection 