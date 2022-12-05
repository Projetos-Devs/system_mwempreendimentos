@extends('admin.layout.default')

@section('title', 'Empreendimentos')

@section('conteudo')



    <div class="container border border-2  pt-1 pb-1 p-5 rounded-4 bg-dark mb-4 shadow">
        <h2 class="text-center bold" style="color: white;">Orçamentos</h2>
    </div>


    @if ($orcamentos->count() == 0)


        <h3 class="mt-4 text-center">Voce não possui orçamentos cadastrados!</h3>
    @else
        @foreach ($orcamentos as $orcamento)
            <div class="container border border-2 pt-1 pb-5 rounded-4 bg-dark mb-5 shadow text-center" style="color: white;">

                <div class="container">

                    <h2>Nome do Cliente: {{ $orcamento->cliente->nome }}</h2><br>

                    <div class="row">

                        <h3 class="mb-5">Tipo do Evento: {{ $orcamento->tipo_evento }}</h3>
                        <h3 class="col-sm-6">Data de Inicio: {{ $orcamento->data_inicio }}</h3><br>
                        <h3 class="col-sm-6">Data de Término: {{ $orcamento->data_fim }}</h3><br>
                        <h3 class="col-sm-6">Cidade: {{ $orcamento->municipio->nome }}</h3>
                        <h3 class="col-sm-6">Estado: {{ $orcamento->uf->sigla }}</h3><br>

                        <details class="mt-3">

                            <summary>Mais Informações</summary>

                            <h3 class="mt-5 text-center">Localização do evento:</h3><br>

                            <p class="px-3 fs-5">{{ $orcamento->endereco }}</p>

                            <h3 class="mt-4 text-center">Descrição do evento:</h3><br>

                            <p class="px-3 fs-5 text-center">{{ $orcamento->descricao }}</p>

                            <h3 class="mt-3 mb-4 text-center">Produtos do evento:</h3>

                            <ul class="mt-4 px-5 text-center">

                                    <li>{{ $orcamento->produtos }}</li>
                            </ul>

                        </details>

                    </div>

                </div>

            </div>
        @endforeach

    @endif

@endsection
