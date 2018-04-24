@extends('layouts.app')

@section('content')
    <pagina-component tamanho="10">
        <painel-component titulo="Dashboard" cor="blue">
            Teste de conteúdo...
            <div class="row">
                <div class="col-md-4">
                    <caixa-component qtd="80" titulo="Artigos" url="#teste" cor="orange" icone="ion ion-pie-graph"></caixa-component>
                </div>
                <div class="col-md-4">
                    <caixa-component qtd="1500" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa-component>
                </div>
                <div class="col-md-4">
                    <caixa-component qtd="3" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa-component>
                </div>
            </div>
        </painel-component>
    </pagina-component>
@endsection
