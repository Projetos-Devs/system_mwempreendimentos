@extends('admin.layout.default')

@section('title', 'Empreendimentos')


@section('conteudo')
    <h1 class="mb-5">Dashboards</h1>

    <div class="container">
    <div class="row g-5">
        <div class="col-md-4">
            <div class="bg-success shadow p-3 text-center text-white">
                <i class="bi bi-people-fill fs-1"></i>
                <h2 class="fs-4">Clientes</h2>
                <h3 class="fs-1">{{ $totalClientes }}</h3>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="bg-primary shadow p-3 text-center text-white">
                <i class="bi bi-bag-dash-fill fs-1"></i>
                <h2 class="fs-4">Produtos</h2>
                <h3 class="fs-1">{{ $totalProdutos }}</h3>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="bg-warning shadow p-3 text-center text-white">
                <i class="bi bi-currency-dollar fs-1"></i>
                <h2 class="fs-4">Orçamentos</h2>
                <h3 class="fs-1">{{ $totalOrcamentos}}</h3>
            </div>
        </div>
    </div>
</div>
@endsection

