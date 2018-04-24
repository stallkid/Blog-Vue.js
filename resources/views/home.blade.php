@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <painel-component titulo="Dashboard" cor="blue">
                        Teste de conteúdo...
                        <div class="row">
                            <div class="col-md-4">
                                <caixa-component></caixa-component>
                            </div>
                            <div class="col-md-4">
                                <painel-component titulo="Conteúdo 2" cor="orange">
                                    Teste de conteúdo...
                                </painel-component>
                            </div>
                            <div class="col-md-4">
                                <painel-component titulo="Conteúdo 3" cor="panel-danger">
                                    Teste de conteúdo...
                                </painel-component>
                            </div>
                        </div>
                    </painel-component>
                </div>
            </div>
        </div>


@endsection
