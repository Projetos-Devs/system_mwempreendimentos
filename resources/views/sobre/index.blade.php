@extends('layouts.default')

@section('title', 'Empreendimentos')

@section('conteudo')
<div class="container">
    <h1 class="mb-3">Sobre a Empresa</h1>
    <p>Quem Somos</p>
    <p class="text-break">
        A empresa M W Empreendimentos que tem como razão social Magaly Andrea Sa Silva foi fundada em 11/01/2005 e está cadastrada na Solutudo no segmento de Estruturas para Eventos com o CNPJ 07.308.806/0001-90. No mercado, a empresa está localizada na Avenida Maranhao, Nº 2005 - Pavlh A no bairro Setor Industrial em Paulo Afonso - BA, CEP 48606-000. A empresa M W Empreendimentos está cadastrada na Receita Federal sob o CNAE 7739-0/03 com
        atividade fim de Aluguel De Palcos, Coberturas E Outras Estruturas De Uso Temporário, Exceto Andaimes.
    </p>
    <div class="row p-5 pb-1">
        <div class="col text-center" style="max-height: 150px">
            <img src="images/layout/Missao.png" style="max-height: 100%" alt="">
        </div>
        <div class="col text-center" style="max-height: 150px">
            <img src="images/layout/Visao.png" style="max-height: 70%" alt="">
        </div>
        <div class="col text-center" style="max-height: 150px">
            <img src="images/layout/Valores.png" style="max-height: 100%" alt="">
        </div>
    </div>
    <div class="row p-5 pt-1">
        <div class="col text-center" style="max-height: 150px">
            <p class="fs-3 text-break">Missão</p>
            <p>Atender um evento com público grandioso</p>
        </div>
        <div class="col text-center" style="max-height: 150px">
            <p class="fs-3 text-break">Visão</p>
            <p> Consolidar-se como um empreendimento sustentável de uma empresa de eventos.</p>
        </div>
        <div class="col text-center" style="max-height: 150px">
            <p class="fs-3 text-break">Valores</p>
            <p>Responsabilidade e Comprometimento com o evento.</p>
        </div>
    </div>
    <hr>
    <h2 class="mb-3">Ajuda</h2>
    <p>Guia do sistema</p>
    <p class="text-break">
        -Aba Home:<br>
        Área inicial de boas vindas do site;<br><br>
        -Aba Sobre:<br>
        Área onde estamos agora;<br><br>
        -Aba Produtos:<br>
        É onde se encontram todos os produtos que estão disponíveis para criação de orçamento. Lá tem fotos e detalhes de cada;<br><br>
        -Aba Orçamentos;<br>
        É onde se poderá criar um orçamento e mandá-lo para avaliação. Após o preenchimento dos dados e enviar seu orçamento é só aguardar o contato.<br>
    </p>
    <hr>
    <h2 class="mb-3">Sobre o sistema</h2>
    <p>Requisitos do sistema</p>
    <p class="text-break">
        -PHP 8.1 ou superior;<br>
        -Servidor Apache;<br>
        -Negadores atualizados.<br>
    </p>
    <hr>
    <h2 class="mb-3">Equipe de desenvolvimento</h2>
    <p>Equipe</p>
    <p class="text-break">
        -Gilherme;<br>
        -Jonas;<br>
        -Marcelo;<br>
        -Matheus;<br>
        -Weverton.<br>
    </p>
    <hr>
    <h2 class="mb-3">Suporte</h2>
    <p>Contatos para suporte</p>
    <p class="text-break">
        WhatsApp: +55 87 8159-9077<br>
        Email: araujomatheusventura@gmail.com<br>
    </p>
    <hr>
</div>
@endsection
