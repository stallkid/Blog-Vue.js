@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <painel-component titulo="Dashboard">
                        Teste de conteúdo...
                        <div class="row">
                            <div class="col-md-4">
                                <painel-component titulo="Conteúdo 1">
                                    Teste de conteúdo...
                                </painel-component>
                            </div>
                            <div class="col-md-4">
                                <painel-component titulo="Conteúdo 2">
                                    Teste de conteúdo...
                                </painel-component>
                            </div>
                            <div class="col-md-4">
                                <painel-component titulo="Conteúdo 3">
                                    Teste de conteúdo...
                                </painel-component>
                            </div>
                        </div>
                    </painel-component>
                </div>
            </div>
        </div>


@endsection
