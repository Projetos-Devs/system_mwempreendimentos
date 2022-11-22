@extends('layouts.default')

@section('title', 'Contatos')

@section('conteudo')
<div class="container" style="">
    <img class="img-fluid" style="width: 1400px;" src="/images/banner_contato.png">
</div>

<div class="container text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C; text-align: center;">
    <h2>Fale conosco</h2>
</div>

<div class="container text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C;  margin-top: 30px;">
    
    <form class="row g-2 p-3">

        <div class="form-group col-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>

        <div class="form-group col-6">
            <label for="nome">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" required>
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
            <input type="text" class="form-control" placeholder="(DDD)XXXXX-XXXX" name="telefone" id="telefone" required>
        </div>

        <div class="form-group col-6">
            <label for="mensagem">Mensagem</label>
            <input type="text" class="form-control pb-5" name="mensagem" id="mensagem" required>
        </div>

        <div class="form-group col-6 m-0    ">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" required>
        </div>
    </form>
    <div class="py-4">
        <button type="submit" class="btn  btn-lg" style="width: 220px; margin-left: 450px; background-color: #5EB7CB">Confirmar</button>
</div>
</div>
@endsection