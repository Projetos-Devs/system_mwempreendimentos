@extends('admin.layout.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    
    

    <div class="container" style="margin-top: 60px">

        <div class="text-white rounded-4 shadow-lg p-1 m-2 mt-4 mb-4"
            style="background-color: #2D2D3C; text-align: center;">
            <h2>Editar Produto</h2>
        </div>

        <div class="container text-white rounded-4 shadow-lg p-1 m-2" style="background-color: #2D2D3C;  margin-top: 30px;">

            <form method="POST" action="{{ route('produtos.update', $produto->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                @foreach ($users as $user)
                <input type="hidden" value="{{$user->id}}" name="id_user">
                @endforeach
                <div class="row m-2">

                    <div class="form-group col-6">
                        <label for="nome">Nome do Produto</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$produto->nome}}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="descricao">Descrição do Produto</label>
                        <input name="descricao" id="descricao" type="text" class="form-control" value="{{$produto->descricao}}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="descricao">Informações sobre Produto</label>
                        <textarea name="produto_info" id="produto_info" class="form-control" aria-valuetext="{{$produto->produto_info}}" required>{{$produto->produto_info}}</textarea>
                    </div>

                    <div class="form-group col-6 mb-5">
                        <label for="tipo">Tipo</label>
                        <select class="form-select" id="tipo" name="tipo" required>
                            <option value="">--</option>
                            <option value="estruturas"@selected($produto->tipo == 'estruturas')>Estruturas</option>
                            <option value="maquinas"@selected($produto->tipo == 'maquinas')>Máquinas</option>
                        </select>
                    </div>

                    <div class="form-group col-6 mb-4">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" name="quantidade_estoque" id="quantidade_quantidade" value="{{$produto->quantidade_estoque}}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control form-control-lg bg-light" value="">
                    </div>


                    <div class="pb-4">
                        <a href="{{ route('produtos.detalhes') }}" class="btn btn-danger btn-lg col-md-2" style="margin-left: 400px;">Cancelar</a>
                        <button type="submit" class="btn btn-lg col-md-2"
                            style="margin-left: 20px; background-color: #5EB7CB">Alterar</button>
                    </div>
            </form>
        </div>

    </div>
@endsection