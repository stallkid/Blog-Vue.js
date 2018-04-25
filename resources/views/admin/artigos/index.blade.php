@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">

        @if ($errors->all())
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            @foreach ($errors->all() as $key => $value)
                <li><strong>{{ $value }}</strong></li>
            @endforeach
            </div>
        @endif

        <painel-component titulo="Lista de Artigos">
            <migalhas-component v-bind:lista="{{$listaMigalhas}}"></migalhas-component>

            <tabela-lista-component
            v-bind:titulos="['#', 'Título', 'Descrição', 'Data']"
            v-bind:itens="{{ json_encode($listaArtigos) }}"
            ordem="asc" ordemcol="1"
            detalhe="/admin/artigos/" criar="#criar" editar="/admin/artigos/" deletar="/admin/artigos/" token="{{ csrf_token() }}"
            modal="sim"
            ></tabela-lista-component>
            <div align="center">
                {{$listaArtigos}}
            </div>
        </painel-component>
    </pagina-component>
    {{--============================== CRIAR -----------------------------------}}
    <modal-component nome="adicionar" titulo="Adicionar">

            <formulario-component  id="formAdicionar" css="" action="{{ route('artigos.store') }}" method="post" enctype="" token="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título"
                    value="{{ old('titulo') }}">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ old('descricao') }}">
                </div>
                <div class="form-group">
                    <label for="conteudo">Conteudo</label>
                    <textarea id="conteudo" class="form-control" name="conteudo">{{ old('conteudo') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="datetime-local" class="form-control" id="data" name="data" value="{{ old('descricao') }}">
                </div>
            </formulario-component>
            <span slot="botoes">
                <button form="formAdicionar" class="btn btn-info">Adicionar</button>
            </span>

    </modal-component>
    {{-------------------------------- EDITAR ----------------------------------}}
    <modal-component nome="editar" titulo="Editar">

            <formulario-component id="formEditar" v-bind:action="'/admin/artigos/'+ $store.state.item.id" method="put" enctype="" token="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título"
                    v-model="$store.state.item.titulo">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" v-model="$store.state.item.descricao">
                </div>
                <div class="form-group">
                    <label for="conteudo">Conteudo</label>
                    <textarea id="conteudo" class="form-control" name="conteudo" v-model="$store.state.item.conteudo"></textarea>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="datetime-local" class="form-control" id="data" name="data" v-model="$store.state.item.data">
                </div>
            </formulario-component>
            <span slot="botoes">
                <button form="formEditar" class="btn btn-info">Atualizar</button>
            </span>

    </modal-component>
    {{-------------------------------- DETALHES --------------------------------}}
    <modal-component nome="detalhe" v-bind:titulo="$store.state.item.titulo">
            <p><strong>Descrição: </strong>@{{ $store.state.item.descricao }}</p>
            <p><strong>Conteúdo: </strong>@{{ $store.state.item.conteudo }}</p>
    </modal-component>
@endsection
