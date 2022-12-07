{{-- @extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')



    <div class="container">

        <h2 class="mb-5">Preencha os campos para prosseguir</h2>

        <div class="container text-white rounded-4 shadow-lg pt-3 p-1 m-2" style="background-color: #2D2D3C;">

            <form method="POST" action="{{route('clientes.store')}}" enctype="multipart/form-data">

                 @csrf
                <div class="row">
                <div class="col-sm-6">
                    <label class="form-label" for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="col-sm-6">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>

                <div class="col-sm-6">
                    <label class="form-label" for="telefone">Telefone</label>
                    <input name="telefone"  type="" class="form-control" placeholder="(XX) XXXXX-XXXX" required>
                </div>

                <div class="col-sm-6">
                    <label class="form-label" for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" required>
                </div>

                
                <div class="form-group col-6">
                    <label class="form-label" for="cpf">CPF</label>
                    <input name="cpf"  type="text" class="form-control">
                </div>
                <div class="form-group col-6">
                    <label class="form-label" for="cnpj">CNPJ</label>
                    <input name="cnpj"  type="text" class="form-control">
                </div>
            

            </div>

            <div class="py-4">
                <button type="submit" class="btn  btn-lg"
                    style="width: 220px; margin-left: 450px; background-color: #5EB7CB">Confirmar</button>
            </div>
        </form>
        </div>

    </div>
@endsection --}}
