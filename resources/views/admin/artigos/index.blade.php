@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
        <painel-component titulo="Lista de Artigos">
            <migalhas-component v-bind:lista="{{$listaMigalhas}}"></migalhas-component>

            <tabela-lista-component
            v-bind:titulos="['#', 'Título', 'Descrição', 'Data']"
            v-bind:itens="{{ $listaArtigos }}"
            ordem="asc" ordemcol="1"
            detalhe="#detalhe" criar="#criar" editar="#editar" deletar="#deletar" token="984964169885648"
            modal="sim"
            ></tabela-lista-component>
        </painel-component>
    </pagina-component>
    {{--============================== CRIAR -----------------------------------}}
    <modal-component nome="adicionar" titulo="Adicionar">

            <formulario-component  id="formAdicionar" css="" action="{{ route('artigos.store') }}" method="post" enctype="" token="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <div class="form-group">
                    <label for="conteudo">Conteudo</label>
                    <textarea id="conteudo" class="form-control" name="conteudo"></textarea>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="datetime-local" class="form-control" id="data" name="data">
                </div>
            </formulario-component>
            <span slot="botoes">
                <button form="formAdicionar" class="btn btn-info">Adicionar</button>
            </span>

    </modal-component>
    {{-------------------------------- EDITAR ----------------------------------}}
    <modal-component nome="editar" titulo="Editar">

            <formulario-component id="formEditar" css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" v-model="$store.state.item.descricao" name="descricao" placeholder="Descrição">
                </div>
            </formulario-component>
            <span slot="botoes">
                <button form="formEditar" class="btn btn-info">Atualizar</button>
            </span>

    </modal-component>
    {{-------------------------------- DETALHES --------------------------------}}
    <modal-component nome="detalhe" v-bind:titulo="$store.state.item.titulo">
            <p>@{{ $store.state.item.descricao }}</p>
    </modal-component>
@endsection
