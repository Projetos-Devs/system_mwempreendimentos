@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')


    <div style="position:relative; margin-bottom: -70px;">
        <img class="w-100" style="height: 370px; margin-top: -50px; object-fit: cover; filter: brightness(55%);"
            src="/storage/produtos/{{$produto->foto}}">

            <div class="container ">
              <h1 class="text-white fs-4" style="position: relative; top: -150px; left: 40px;">Produtos</h1>
              <p class="text-white text-capitalize" style="position: relative; top: -155px; left: 40px; font-size:3.5em">{{$produto->nome}}</p>
          </div>
    </div>



    <div class="container border border-2  pt-1 pb-1 p-5 rounded-4 bg-dark mb-5 mt-4 shadow">
            
      <form method="POST" action="{{ route('servicos.update', $produto->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')  
      
        <h2 class="text-center bold mt-2" style="color: white;" aria-valuetext="{{$produto->nome}}">{{$produto->nome}}</h2>
        <hr style="color: white;" >
        
        <div class="row fs-5 p-4 pb-1">
            <div class="col-sm-6 text-center px-3">
                <img src="/storage/produtos/{{$produto->foto}}" class="figure-img img-fluid rounded">
            </div>
            <div class="col-sm-6">
                <p class="fs-3 fw-bold text-break" style="color: white;">Classificação: {{$produto->descricao}}</p>
                <p class="fs-6 text-break" style="color: white;" aria-valuetext="{{$produto->quantidade_estoque}}">Quantidade: {{$produto->quantidade_estoque}}</p>
                <hr style="color: white;" >
                <div class="mb-3">
                    <p class="fw-bold text-break" style="color: white;" aria-valuetext="{{$produto->produto_info}}">Descrição: {{$produto->produto_info}} </p>
                </div>
                <hr style="color: white;" >
                <div class="text-center align-middle mb-3">
                    <a href="{{route('orcamentos.index')}}" class="btn btn-primary ps-4 pe-4 fs-4"> Solicite um Orçamento</a>
                </div>
            </div>

          </form>
            

            <hr style="color: white;" >

            <div class="mb-3">
                <p class="fw-bold text-start" style="color: white;">Imagens</p>
                 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 50%">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/images/banner_produtos.png" class="rounded d-block w-100" alt="imagem de Error 404">
                      </div>

                      <div class="carousel-item">
                        <img src="/images/banner_orcamento.png" class="d-block w-100" alt="imagem de Error 404">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/banner_produtos.png" class="d-block w-100" alt="imagem de Sem imagens">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/banner_contato.png" class="d-block w-100" alt="imagem de Sem imagens">
                      </div>
                       
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            
            <hr style="color: white;" > 
            
            <hr style="color: white;" >

            
    
        </div>
    </div>
        
@endsection