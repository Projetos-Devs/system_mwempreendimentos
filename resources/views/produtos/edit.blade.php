@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    
    

    <div class="container" style="margin-top: 60px">

        <div class="text-white rounded-4 shadow-lg p-1 m-2 mt-4 mb-4"
            style="background-color: #2D2D3C; text-align: center;">
            <h2>Editar Produto</h2>
        </div>

        <div class="container text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C;  margin-top: 30px;">

            <form method="POST" action="{{ route('produtos.update', $produtos->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <input type="hidden" value="1" name="id_cliente">
                <input type="hidden" value="1" name="id_user">
                <input type="hidden" value="1" name="id_produto">
                <input type="hidden" value="andamento" name="status">

                <div class="row m-2">

                    <div class="form-group col-6">
                        <label for="nome">Nome do Produto</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$produtos->nome}}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="descricao">Descrição do Produto</label>
                        <input name="descricao" id="descricao" type="text" class="form-control" value="{{$produtos->descricao}}" required>
                    </div>

                    <div class="form-group col-6 mb-5">
                        <label for="tipo">Tipo</label>
                        <select class="form-select" id="estado" name="tipo" required>
                            <option value="">--</option>
                            <option value="@selected($produtos->tipo == 'estrutura')">Estruturas</option>
                            <option value="@selected($produtos->tipo == 'maquina')">Máquinas</option>
                        </select>
                    </div>

                    <div class="form-group col-6 mb-4">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" name="quantidade_estoque" id="quantidade_quantidade" value="{{$produtos->quantidade}}" required>
                    </div>


                    <div class="pb-4">
                        <a href="{{ route('produtos.index') }}" class="btn btn-danger btn-lg col-md-2" style="margin-left: 400px;">Cancelar</a>
                        <button type="submit" class="btn btn-lg col-md-2"
                            style="margin-left: 20px; background-color: #5EB7CB">Alterar</button>
                    </div>
            </form>
        </div>

    </div>
@endsection