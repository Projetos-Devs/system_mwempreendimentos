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

    <div class="container" style="margin-top: -75px">

        @if (Session::get('sucesso'))

            <div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>
            
        @endif
        
        <div class="text-white rounded-4 shadow-lg p-1 m-2 mb-4"
            style="background-color: #2D2D3C; text-align: center;">
            <h2>Orçamento</h2>
        </div>

        <div class="text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C;  margin-top: 30px;">

            <form method="POST" action="{{ route('orcamentos.store') }}" enctype="multipart/form-data">

                @csrf
                <input type="hidden" value="andamento" name="status">
                <div class="row m-2">

                    <div class="form-group col-6">
                        <label for="tipo_evento">Nome do Responsável</label>
                        <input type="text" class="form-control" name="nome_cliente" id="nome_cliente" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="tipo_evento">Nome da Empresa</label>
                        <input type="text" class="form-control" name="nome_empresa" id="nome_empresa">
                    </div>
                    <div class="form-group col-6">
                        <label for="tipo_evento">Email</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="tipo_evento">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="tipo_evento">Tipo do Serviço</label>
                        <input type="text" class="form-control" name="tipo_evento" id="tipo" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="endereco">Localização</label>
                        <input name="endereco" id="endereco" type="text" class="form-control" required>
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

                    <div class="form-group mt-4">
                        <label for="endereco">Descrição do evento</label>
                        <textarea name="descricao" id="descricao" class="form-control"></textarea>
                    </div>

                    <h3 class="mt-5 mb-5">Produtos Disponíveis:</h3>


                    <div class="row px-5">

                        @foreach ($produtos as $produto)
                            <div class="col-sm-4 mb-4 mt-3" style="font-size: 12pt">
                                <div>
                                    <input style="margin-right: 13px; margin-bottom: 20px;" type="checkbox"
                                        name="produtos[]" value="{{ $produto->nome }}">{{ $produto->nome }}
                                    <select name="qtds[]">
                                        <option value="">--</option>
                                        @for ($cont = 1; $cont <= $produto->quantidade_estoque; $cont++)
                                            <option value="{{ $cont }}">{{ $cont }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr style="color: white">

                    <div class="mb-2 mt-2 pb-3 container text-center">

                        <div class="row">

                            <div class="col text-end">
                                <a href="{{ route('home.index') }}" class="btn btn-danger btn-lg col-md-3">Cancelar</a>
                            </div>

                            <div class="col text-start">
                                <button type="submit" class="btn btn-lg col-md-3"
                                    style="background-color: #5EB7CB">Confirmar</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>

    </div>
@endsection
