@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    <div style="position:relative;">
        <img class="w-100"
            style="height: 370px; margin-top: -50px; object-fit: cover; filter: brightness(55%);"
            src="/images/contact1.jpg">

        <div class="container ">
            <h1 class="text-white" style="position: relative; top: -150px; left: 40px; font-size:3.5em">Contate-nos</h1>
            <p class="text-white" style="position: relative; top: -155px; left: 40px;">Tire suas dúvidas</p>
        </div>
    </div>

    <div class="container">

        <!--<div class="text-white rounded-3 shadow-lg p-1 m-2" style="background-color: #2D2D3C; text-align: center;">-->
        <!--</div>-->
        <div class="container border border-2 pt-1 pb-1 p-5 rounded-4 mb-4 shadow" style="background-color: #2D2D3C;">
            <h2 class="fs-1 text-center text-light">Fale conosco</h2>
        </div>

        <div class="text-white rounded-4 shadow-lg p-1 pb-2 mb-2 px-4" style="background-color: #2D2D3C;">

            <form class="row p-3">

                <div class="form-group mb-3 col-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                </div>

                <div class="form-group mb-3 col-6">
                    <label for="nome">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>

                <div class="form-group mb-3 col-6">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" class="form-control" required>
                </div>

                <div class="form-group mb-3 col-6">
                    <label for="assunto">Assunto</label>
                    <select class="form-select" id="assunto" name="assunto" required>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" placeholder="(DDD)XXXXX-XXXX" name="telefone" id="telefone"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="cidade">Cidade</label>
                        <select class="form-select" id="cidade" name="cidade" required>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-3 col-6">
                    <label for="mensagem">Mensagem</label>
                    <input type="text" class="form-control pb-5" name="mensagem" id="mensagem" required>
                </div>

                
            <hr style="color: white;">

            <div class="mb-2 mt-2 container text-center">
                <div class="row">
                  <div class="col text-end">
                    <a href="#" class="ps-4 pe-4 btn btn-danger btn-lg">Cancelar</a>
                  </div>
                  <div class="col text-start">
                    <a href="#" class=" btn btn-info btn-lg text-light">Confirmar</a>
                  </div>
                </div>
            </div>
            </form>
            {{-- <div class="align-middle pb-4 row">
                <a href="#" class=" aling-end btn btn-danger btn-lg" style="max-width: 20px">Cancelar</a>
                <button type="submit" class="align-start btn btn-lg col-md-6"
                    style="background-color: #5EB7CB">Confirmar</button>
            </div> --}}
        </div>
    </div>
@endsection
