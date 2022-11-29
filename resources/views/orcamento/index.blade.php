@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    <div style="position:relative;">
        <img class="w-100" style="height: 370px; margin-top: -50px; object-fit: cover; filter: brightness(55%);"
            src="/images/orcamento.jpg">

        <div class="container ">
            <h1 class="text-white" style="position: relative; top: -150px; left: 40px; font-size:3.5em">Orçamento</h1>
            <p class="text-white" style="position: relative; top: -155px; left: 40px;">Faça seu orçamento agora !</p>
        </div>
    </div>

    <div class="container" style="margin-top: -60px">

        <div class="text-white rounded-4 shadow-lg p-1 m-2 mt-4 mb-4"
            style="background-color: #2D2D3C; text-align: center;">
            <h2>Orçamento</h2>
        </div>

        <div class="container text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C;  margin-top: 30px;">

            <form method="POST" action="{{route('orcamento.store')}}" enctype="multipart/form-data">

                 @csrf
                 <input type="hidden" value="1" name="id_cliente">
                 <input type="hidden" value="1" name="id_user">
                 <input type="hidden" value="1" name="id_produto">
                 <input type="hidden" value="andamento" name="status">
                <div class="row">
                <div class="form-group col-6">
                    <label for="tipo_evento">Tipo do evento</label>
                    <input type="text" class="form-control" name="tipo_evento" id="tipo" required>
                </div>

                <div class="form-group col-6">
                    <label for="data_inicio">Data de início do evento</label>
                    <input type="date" class="form-control" name="data_inicio" id="data_in" required>
                </div>

                <div class="form-group col-6">
                    <label for="data_fim">Data de término do evento</label>
                    <input type="date" class="form-control" name="data_fim" id="data_fim" required>
                </div>

                <div class="form-group col-6">
                    <label for="endereco">Endereço</label>
                    <input name="endereco" id="endereco" type="text" class="form-control" required>
                </div>


                <div class="form-group col-6">
                    <label for="id_municipio">Cidade</label>
                    <select class="form-select" name="id_municipio" value="" required>
                        <option value="">--</option>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}">{{ $municipio->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="id_uf">Estado</label>
                    <select class="form-select" id="estado" name="id_uf" required>
                        <option value="">--</option>
                        @foreach ($ufs as $uf)
                            <option value="{{ $uf->id }}">{{ $uf->sigla }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                
                <!--<div class="form-group">
                    <input class="form-check-input" type="checkbox" value="" id="tenda" name="tenda">
                    <label class="form-check-label" for="tenda">Tenda</label>
                </div>

                <div class="form-group">
                    <input class="form-check-input" type="checkbox" value="" id="tenda" name="tenda">
                    <label class="form-check-label" for="tenda">Palco</label>
                </div>-->

            <div class="py-4">
                <button type="submit" class="btn  btn-lg"
                    style="width: 220px; margin-left: 450px; background-color: #5EB7CB">Confirmar</button>
            </div>
        </form>
        </div>

    </div>
@endsection
