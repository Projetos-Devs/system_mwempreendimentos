@extends('admin.layout.default')

@section('title', 'Empreendimentos')

@section('conteudo')



    <div class="container border border-2  pt-1 pb-1 p-5 rounded-4 bg-dark mb-4 shadow">
        <h2 class="text-center bold" style="color: white;">Orçamentos</h2>
    </div>

    @if (Session::get('sucesso'))

            <div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>
            
        @endif

    @if ($orcamentos->count() == 0)


        <h3 class="mt-4 text-center">Voce não possui orçamentos cadastrados!</h3>
    @else
        @foreach ($orcamentos as $orcamento)
            <div class="container border border-2 pt-1 pb-5 rounded-4 bg-dark mb-5 shadow text-center" style="color: white;">

                <div class="container">

                    <div class="row mb-2">

                    <div class="col-5 p-3 pt-4 text-start">
                    <h2 class="text-middle">Nome do Cliente: {{ $orcamento->nome_cliente }}</h2><br>
                    </div>

                    <div class="col-7 p-3 pt-4 text-end" >
                    <a href="{{ route('orcamentos.editorcamento', $orcamento->id) }}" class="btn btn-primary mx-1" title="Editar">
                        <i class="bi bi-pen"></i></a>
                    <a href="{{ route('orcamentos.destroyorcamento', $orcamento->id) }}" class="btn btn-danger " title="Excluir"
                        data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $orcamento->id }}">
                        <i class="bi bi-trash"></i></i></a>
                        
                        @include('admin.orcamentos.delete')
                    </div>

                    </div>
                  

                    <div class="row">

                        <h3 class="mt-2">Tipo do Evento: {{ $orcamento->tipo_evento }}</h3>
                        <h3 class="col-sm-6 mt-4">Data de Inicio: {{ date( 'd/m/Y' , strtotime($orcamento->data_inicio)) }}</h3><br>
                        <h3 class="col-sm-6 mt-4">Data de Término: {{ date( 'd/m/Y' , strtotime($orcamento->data_fim)) }}</h3><br>
                        <h3 class="col-sm-6 mt-4">Cidade: {{ $orcamento->municipio->nome }}</h3>
                        <h3 class="col-sm-6 mt-4">Estado: {{ $orcamento->uf->sigla }}</h3><br>

                        <h3 class="mt-4 mb-3">Status do Orçamento:</h3>

                            @if ($orcamento->status == 'andamento')
                                <div class="d-grid gap-2 col-3 mx-auto mt-2">
                            <div class="btn btn-success text-uppercase">{{$orcamento->status}}</div>
                            </div>

                            @elseif ($orcamento->status == 'finalizado')

                            <div class="d-grid gap-2 col-3 mx-auto mt-2">
                            <div class="btn btn-secondary text-uppercase">{{$orcamento->status}}</div>
                            </div>

                            @elseif ($orcamento->status == 'cancelado')

                            <div class="d-grid gap-2 col-3 mx-auto mt-2">
                            <div class="btn btn-danger text-uppercase">{{$orcamento->status}}</div>
                            </div>
                                
                            @endif

                        <details class="mt-3">

                            <summary>Mais Informações</summary>

                            <h3 class="mt-4 text-center">Nome da Empresa:</h3>

                            @if ($orcamento->nome_empresa == null)

                            <p class="mt-4 px-3 fs-4 text-center">Não possui!!</p>
                                
                            @else

                            <div class="container" style="width: 500px;">
                                <p class="mt-4 px-3 fs-4 text-center">{{ $orcamento->nome_empresa }}</p>
                                </div>

                            @endif

                

                        <h3 class="mt-4 text-center">Email:</h3>

                        <div class="container" style="width: 500px;">
                        <p class="mt-4 px-3 fs-4 text-center">{{ $orcamento->email }}</p>
                        </div>


                        <h3 class="mt-4 text-center">Telefone:</h3>

                        <div class="container" style="width: 500px;">
                        <p class="mt-4 px-3 fs-4 text-center">{{ $orcamento->telefone }}</p>
                        </div>

                            <h3 class="mt-4 text-center">Localização do evento:</h3><br>

                            <div class="container" style="width: 500px;">
                            <p class="px-3 fs-5 text-center text-break">{{ $orcamento->endereco }}</p>
                            </div>

                            <h3 class="mt-4 text-center">Descrição do evento:</h3><br>
                            
                            @if ($orcamento->descricao == null)

                            <h5 class="mt-4 px-3 fs-4 text-center">Não possui!!</h5>
                                
                            @else

                            <div class="container" style="width: 500px;">
                            <p class="pt-1 px-4 fs-5 text-center text-break">{{ $orcamento->descricao }}</p>
                            </div>
                            @endif

                            <h3 class="mt-4 text-center">Produtos do evento:</h3>

                            <div class="mt-3 container" style="width: 500px;">
                                    <p class="pt-1 px-4 fs-5 text-center text-break text-capitalize">{{ $orcamento->produtos }}</p>
                             </div>

                             <div class="mt-2 text-end">
                                <a href="https://wa.me/{{$orcamento->telefone}}" target="_blank"><img src="/images/layout/whatsapp1.png" width="50px;" height="50px;" title="Contate pelo whatsapp"></a>
                                <a href="mailto:{{$orcamento->email}}" target="_blank"><img src="/images/layout/gmail.png" width="55px;" height="50px;" title="Contate pelo email"></a>
                             </div>

                        </details>

                    </div>

                </div>

            </div>
        @endforeach

    @endif

@endsection
