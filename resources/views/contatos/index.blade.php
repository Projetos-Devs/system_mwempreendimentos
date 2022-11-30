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

        <h2 class="mb-4 fs-1 fs-1" style="margin-top: -60px">Fale conosco</h2>

        <div class="text-white rounded-4 shadow-lg p-1 pb-2 m-2 px-4" style="background-color: #2D2D3C;">

            <form class="row g-2 p-3">

                <div class="form-group col-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                </div>

                <div class="form-group col-6">
                    <label for="nome">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" class="form-control" required>
                </div>

                <div class="form-group col-6">
                    <label for="assunto">Assunto</label>
                    <select class="form-select" id="assunto" name="assunto" required>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" placeholder="(DDD)XXXXX-XXXX" name="telefone" id="telefone"
                        required>
                </div>

                <div class="form-group col-6">
                    <label for="mensagem">Mensagem</label>
                    <input type="text" class="form-control pb-5" name="mensagem" id="mensagem" required>
                </div>

                <div class="form-group col-6 m-0    ">
                    <label for="cidade">Cidade</label>
                    <select class="form-select" id="cidade" name="cidade" required>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </form>
            <div class="py-4">
                <button type="submit" class="btn btn-lg"
                    style="width:220px; margin-left: 40.5%;background-color: #5EB7CB">Confirmar</button>
            </div>
        </div>
    </div>
@endsection
