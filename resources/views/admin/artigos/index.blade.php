@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
        <painel-component titulo="Lista de Artigos">
            <migalhas-component v-bind:lista="{{$listaMigalhas}}"></migalhas-component>

            <modal-link-component tipo="button" nome="meuModalTeste" titulo="Criar" css=""></modal-link-component>

            <tabela-lista-component
            v-bind:titulos="['#', 'Título', 'Descrição']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHP OO'],[2,'Vue JS', 'Curso de Vue JS']]"
            ordem="asc" ordemcol="1"
            detalhe="#detalhe" criar="#criar" editar="#editar" deletar="#deletar" token="984964169885648"
            ></tabela-lista-component>
        </painel-component>
    </pagina-component>

    <modal-component nome="meuModalTeste">
        <painel-component titulo="Adicionar">

            <formulario-component css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario-component>

        </painel-component>
    </modal-component>
@endsection
