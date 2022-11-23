@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')


<div class="">
    <img class="img-fluid" style="width: 100%; margin-top: -50px;" src="/images/banner_orcamento.png">
</div>


<div class="container">

<div class="text-white rounded-4 shadow-lg p-1 m-2 mt-4 mb-4" style="background-color: #2D2D3C; text-align: center;">
    <h2>Orçamento</h2>
</div>

<div class="container text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C;  margin-top: 30px;">
    
    <form class="row g-2 p-3">

        <div class="form-group col-6">
            <label for="tipo">Tipo do evento</label>
            <select class="form-select" id="tipo" name="tipo" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>

        <div class="form-group col-6">
            <label for="proficao">Você é?</label>
            <select class="form-select" id="proficao" name="proficao" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>

        <div class="form-group col-6">
            <label for="data_in">Data de início do evento</label>
            <input type="date" class="form-control" name="data_in" id="data_in" required>
        </div>

        <div class="form-group col-6">
            <label for="nome_em">Nome da empresa</label>
            <input type="text" class="form-control" name="nome_em" id="nome_em" required>
        </div>

        <div class="form-group col-6">
            <label for="data_fim">Data de término do evento</label>
            <input type="date" class="form-control" name="data_fim" id="data_fim" required>
        </div>

        <div class="form-group col-6">
            <label for="nome_resp">Nome do responsável</label>
            <input type="text" class="form-control" name="nome_resp" id="nome_resp" required>
        </div>

        <div class="form-group col-6">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" required>
        </div>

        <div class="form-group col-6">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" class="form-control" required>
        </div>

        <div class="form-group col-6">
            <label for="estado">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>

        <div class="form-group col-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" placeholder="(DDD)XXXXX-XXXX" name="telefone" id="telefone" required>
        </div>

        <div class="form-group p-2">
            <label class="rounded" for=""> Envie o projeto do seu evento</label>
            <input type="file" class="form-control-file rounded form-control" name="foto" id="foto">
        </div>

        <div class="form-group">
            <input class="form-check-input" type="checkbox" value="tenda" id="tenda" name="tenda">
            <label class="form-check-label" for="tenda">Tenda</label>
        </div>

        <div class="form-group">
            <input class="form-check-input" type="checkbox" value="tenda" id="tenda" name="tenda">
            <label class="form-check-label" for="tenda">Palco</label>
          </div>

    </form>
    <div class="py-4">
        <button type="submit" class="btn  btn-lg" style="width: 220px; margin-left: 450px; background-color: #5EB7CB">Confirmar</button>
</div>
</div>

</div>
@endsection