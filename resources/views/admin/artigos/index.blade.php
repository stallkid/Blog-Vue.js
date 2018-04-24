@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
        <painel-component titulo="Lista de Artigos">
            <tabela-lista-component v-bind:titulos="['#', 'teste', 'outro']"></tabela-lista-component>
        </painel-component>
    </pagina-component>
@endsection
