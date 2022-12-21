@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
    {{-- <div class="" style="margin-top:-49px; max-width: 100%; position:relative;">
        <img src="/images/layout/image.png" class="" style="max-width: 100%" alt="">
    </div> --}}


    <div style="margin-top:-49px;">

    <div id="carouselproject" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselproject" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselproject" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselproject" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">

            <div style="position:relative;">

            <div class="div-img-carousel">
            <img src="/images/foto_palco_14x12.jpg" class="d-block w-100" style="filter: brightness(55%);" alt="">
            </div>
            <div class="container ">
                <h1 class="text-white" style="position: relative; top: -150px; left: 40px; font-size:3.5em">Temos Palcos</h1>
                <p class="text-white" style="position: relative; top: -155px; left: 40px;">Faça seu orçamento conosco</p>
            </div>

            </div>

            {{-- <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div> --}}
          </div>

          <div class="carousel-item" data-bs-interval="3000">

            <div style="position:relative;">

            <div class="div-img-carousel">
            <img src="/images/tenda_5x5.jpg" class="d-block w-100" style="filter: brightness(55%);" alt="...">
            </div>
            <div class="container ">
                <h1 class="text-white" style="position: relative; top: -150px; left: 40px; font-size:3.5em">Temos Toldos</h1>
                <p class="text-white" style="position: relative; top: -155px; left: 40px;">Faça seu orçamento conosco</p>
            </div>

            </div>

            {{-- <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div> --}}
          </div>

          <div class="carousel-item" data-bs-interval="3000">

            <div style="position:relative;">

            <div class="div-img-carousel">
            <img src="/images/camarim.jpg" class="d-block w-100" style="filter: brightness(55%);" alt="...">
            </div>    
            <div class="container ">
                <h1 class="text-white" style="position: relative; top: -150px; left: 40px; font-size:3.5em">Temos Camarins</h1>
                <p class="text-white" style="position: relative; top: -155px; left: 40px;">Faça seu orçamento conosco</p>
            </div>

            </div>

            {{-- <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div> --}}
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselproject" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselproject" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

    </div>



    <div class="text-black p-4 mt-3 mb-3">
        <h1>Bem vindo ao Site <br>MWEmpreendimentos</h1>
    </div>

    <div class="bg-dark mt-5 pb-4">


        <p class="fs-2 pt-3 pb-3 text-light">Veja alguns dos nossos produtos!</p>


        <div class="container">
            <button class="arrow-left control" aria-label="Previous image" style="margin-left: -70px;">◀</button>
            <button class="arrow-right control" aria-label="Next Image" style="margin-right: -25px;">▶</button>
            <div class="gallery-wrapper">
                <div class="gallery">
      

                @foreach ($produtos as $produto )        

                    <a href="{{route('servicos.detalhes', $produto->id)}}" class="text-decoration-none"><img src="/storage/produtos/{{$produto->foto}}" alt="{{$produto->nome}}"
                        class="item current-item"></a>

                        @endforeach

                </div>
            </div>
        </div>

        <script type="text/javascript">
            const controls = document.querySelectorAll(".control");
            let currentItem = 0;
            const items = document.querySelectorAll(".item");
            const maxItems = items.length;

            controls.forEach((control) => {
                control.addEventListener("click", (e) => {
                    isLeft = e.target.classList.contains("arrow-left");

                    if (isLeft) {
                        currentItem -= 1;
                    } else {
                        currentItem += 1;
                    }

                    if (currentItem >= maxItems) {
                        currentItem = 0;
                    }

                    if (currentItem < 0) {
                        currentItem = maxItems - 1;
                    }

                    items.forEach((item) => item.classList.remove("current-item"));

                    items[currentItem].scrollIntoView({
                        behavior: "smooth",
                        inline: "center"
                    });

                    items[currentItem].classList.add("current-item");
                });
            });
        </script>




        {{-- <div class="container text-light">

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
    </div> --}}

    </div>

@endsection
