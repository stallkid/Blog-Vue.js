@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
        <painel-component titulo="Lista de Artigos">
            <migalhas-component v-bind:lista="{{$listaMigalhas}}"></migalhas-component>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTeste">Large modal</button>

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
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </painel-component>
    </modal-component>
@endsection
