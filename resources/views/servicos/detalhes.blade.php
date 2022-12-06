@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    <div style="position:relative;">
        <img class="w-100" style="height: 370px; margin-top: -50px; object-fit: cover; filter: brightness(55%);"
            src="/images/banner_produtos.png">
    </div>



    <div class="container border border-2  pt-1 pb-1 p-5 rounded-4 bg-dark mb-5 mt-4 shadow">
            
            
        <h2 class="text-center bold mt-2" style="color: white;">Banheiro quimico</h2>
        <hr style="color: white;" >
        
        <div class="row fs-4 p-4 pb-1">
            <div class="col-sm-6 text-center">
                <img src="/images/camarim.jpg" class="figure-img img-fluid rounded">
            </div>
            <div class="col-sm-6">
                <p class="fs-3 fw-bold text-break" style="color: white;">Banheiros quimicos</p>
                <p class="fs-6 text-break" style="color: white;">Quantidade: 10</p>
                <hr style="color: white;" >
                <div class="mb-3">
                    <p class="fw-bold text-break" style="color: white;">Descrição: A descrição ocorrera aqui neste lugar. A descrição ocorrera aqui neste lugar. A descrição ocorrera aqui neste lugar. A descrição ocorrera aqui neste lugar. </p>
                </div>
                <hr style="color: white;" >
                <div class="text-center align-middle mb-3">
                    <a href="" class="btn btn-primary ps-4 pe-4 fs-4"> Fazer Orçamento </a>
                </div>
            </div>
            
            

            <hr style="color: white;" >

            <div class="mb-3">
                <p class="fw-bold text-start" style="color: white;">Imagens</p>
                {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 50%">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/layout/Error_404_White.png" class="rounded d-block w-100" alt="imagem de Error 404">
                      </div>
                      <div class="carousel-item">
                        <img src="images/layout/Error_404_Dark.png" class="d-block w-100" alt="imagem de Error 404">
                      </div>
                      <div class="carousel-item">
                        <img src="images/layout/Sem_imagens_White.png" class="d-block w-100" alt="imagem de Sem imagens">
                      </div>
                      <div class="carousel-item">
                        <img src="images/layout/Sem_imagens_Dark.png" class="d-block w-100" alt="imagem de Sem imagens">
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
                  </div>--}}
            </div>
            
            <hr style="color: white;" >

            

            <hr style="color: white;" >

            
    
        </div>
    </div>
        
@endsection