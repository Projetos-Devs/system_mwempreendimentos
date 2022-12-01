@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')

    {{-- <h1 class="mb-4">Funcionários</h1> --}}

    {{-- <a href="{{ route('funcionarios.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    
    <p>total de funcionarios: {{ $totalFuncionarios }}</p> --}}

    {{-- <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaFuncionario" class="form-control form-control-lg" placeholder="Nome do funcionário">
            <button class="btn btn-primary btn-lg" type="submit">Procurar</button>
            
        </div>
        <a href="{{route('funcionarios.index')}}" class="btn btn-light border btn-lg">Limpar</a>
    </form> --}}

    <div class="w-100 pt-1 pb-1 mb-4 bg-dark shadow">
        <h1 class="text-center bold" style="color: white;">Fabiana</h1>
        <hr style="color: white;" >
        <div class="container">
            <div class="row text-center fs-4">
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Email: Fabloja@gmail.com</p> 
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Empresa:Fabiloja</p>
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Telefone: (+55)81 98765 4321</p> 
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Orçamentos abertos: 1</p>
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Cpf: xxx.xxx.xxx-xx</p> 
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Orçamentos finalizados: 1</p>
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Cnpj: xxx.xxx.xxx-xx</p> 
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Orçamentos Cancelados: 1</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container border border-2  pt-1 pb-1 p-5 rounded-4 bg-dark mb-4 shadow">
        <h2 class="text-center bold" style="color: white;">Orçamentos</h2>
    </div>

    {{-- @foreach ($funcionarios as $funcionario)  --}}
        <div class="container border border-2  pt-1 pb-1 p-5 rounded-4 bg-dark mb-5 shadow">

            <div class="container text-center mt-3">
                <div class="row">
                    <div class="col">
                        
                    </div>
                    <div class="col">
                        <h2 class="text-center bold" style="color: white;">Data de inicio/fim: 22/08-23/08</h2>
                    </div>
                    <div class="col ">
                        <div class="mt-4 bg-success rounded-4">
                            <p class="fs-4 text-light">Orçamento: aberto</p>
                        </div>
                    </div>
                    
                </div>
              </div>
            
            
            <hr style="color: white;" >
            <div class="row text-center fs-4 p-4 pb-1">
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Tipo do evento: {{--{{ $funcionario->id }}--}}</p>
                </div>

                <div class="mb-3 col-sm-6 ">
                    <p class="fw-bold" style="color: white;">Estado: Bahia</p>
                </div>

                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Cidade: Paulo Afonso</p>
                </div>
                <div class="mb-3 col-sm-6">
                    <p class="fw-bold" style="color: white;">Empresa: {{--{{ $funcionario->nome }}--}}</p>
                </div>

                <hr style="color: white;" >

                <div class="mb-3">
                    <p class="fw-bold" style="color: white;">Detalhes do evento:</p>
                    <p class="fw-bold text-break" style="color: white;">Queremos um evento medio, vai ser uma area mais aberta e tera bastante comida e musica.</p>
                </div>
                
                <hr style="color: white;" >

                <div class="mb-3 col-sm-12">
                    <p class="fw-bold" style="color: white;">Listas de Produtos:</p>
                    <p class="fw-bold text-break" style="color: white;">Palco</p>
                    <p class="fw-bold text-break" style="color: white;">Aluminio</p>
                    <p class="fw-bold text-break" style="color: white;">Praticaveis</p>
                    <p class="fw-bold text-break" style="color: white;">placas de fechamento</p>
                    <p class="fw-bold text-break" style="color: white;">Toldos</p>
                    <p class="fw-bold text-break" style="color: white;">Camarins</p>
                </div>

                <hr style="color: white;" >

                <div class=" mb-2 col-sm-12">
                    <a href="" class="btn btn-primary fs-4"><i class="bi bi-pen"></i> Editar Orçamento</a>
                </div>
        
            </div>
        </div>
    {{-- @endforeach --}}

    {{-- <div class="table-responsive">
        <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Cargo</th>
                <th class="text-center">Departamento</th>
                <th class="text-center">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)           
            <tr>
                <td class="text-center align-middle">{{ $funcionario->id }}</td>
                <td class="text-center align-middle"><img src="/storage/funcionarios/{{ $funcionario->foto }}" alt="{{ $funcionario->nome }}" width="100"></td>
                <td class="text-center align-middle">{{ $funcionario->nome }}</td>
                <td class="text-center align-middle">{{ $funcionario->cargo->descricao }}</td>
                <td class="text-center align-middle">{{ $funcionario->departamento->nome }}</td>
                <td class="text-center align-middle">
                    <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-primary mb-2 me-2 fs-4"><i class="bi bi-pen"></i> </a>
                    <a href="" class="btn btn-danger mb-2 fs-4" data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $funcionario->id }}"><i class="bi bi-trash"></i></a>
                    @include('funcionarios.delete')</td>
            </tr>
            @endforeach
        </tbody>
        </table> --}}

        {{-- <div>
            <style>
                .pagination{
                    justify-content: center;
                }
            </style>
            {{ $funcionarios->links() }}
        </div>
    </div> --}}
@endsection