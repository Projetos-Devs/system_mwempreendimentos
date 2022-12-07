@extends('admin.layout.default')

@section('title', 'Empreendimentos')

@section('conteudo')


<div class="container shadow-sm position-relative bg-white pb-3 px-4" style="width:1150px; margin-top: 35px;">

    <h1 class="pt-4 mb-4">Produtos</h1>

    <a href="{{ route('produtos.create') }}"class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4" 
    title="cadastrar produto"><i class="bi bi-plus"></i></a>

    <table class="table table-responsive">
        <thead class="table-dark">
            <tr class="text-center rounded-4">
                <th>Id</th>
                <th>Fotos</th>
                <th>Nome</th>
                <th>Descrição do produto</th>
                <th>Informações do produto</th>
                <th>Tipo</th>
                <th>Quantidade</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @if ($produtos->count() == 0)

            <tr>
                <td>------</td>
                <td>------</td>
                <td>------</td>
                <td class="pt-3 pb-3 fw-bold fs-5">Voce não possui produtos cadastrados!</td>
                <td>------</td>
                <td>------</td>
                <td>------</td>
            </tr>
            @else
                @foreach ($produtos as $produto)
                    <tr class="text-center">
                        <td class="align-middle">{{ $produto->id }}</td>
                        <td><img src="/storage/produtos/{{ $produto->foto }}" alt="{{ $produto->nome }}"
                            width="100" height="110"></td>
                        <td class="align-middle">{{ $produto->nome }}</td>
                        <td class="align-middle">{{ $produto->descricao }}</td>
                        <td class=" text-break">
                           <div class="align-middle px-2" style="width: 350px;">{{ $produto->produto_info }}</div> 
                        </td>
                        <td class="align-middle">{{ $produto->tipo }}</td>
                        <td class="align-middle">{{ $produto->quantidade_estoque }}</td>
                        <td class="align-middle text-center">
                            
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary" title="Editar">
                                <i class="bi bi-pen"></i></a>
                            <a href="{{ route('produtos.destroy', $produto->id) }}" class="btn btn-danger " title="Excluir"
                                data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $produto->id }}">
                                <i class="bi bi-trash"></i></i></a>

                            @include('admin.produtos.delete')
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

</div>

@endsection
