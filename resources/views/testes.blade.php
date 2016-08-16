@extends('layouts.backend')
@section('title','Testes')
@section('content')
    <div class="container">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormCliente">
            Exibir Form: Cliente
        </button>

        <!-- Modal -->
        <div class="modal fade" id="FormCliente" tabindex="-1" role="dialog" aria-labelledby="Form" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="FormLabel">Form Cliente</h4>
                    </div>
                    <div class="modal-body">
                        {!! view('forms.cliente')  !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormCNPJ">
            Exibir Form: CNPJ
        </button>

        <!-- Modal -->
        <div class="modal fade" id="FormCNPJ" tabindex="-1" role="dialog" aria-labelledby="Form" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="FormLabel">Form - CNPJ</h4>
                    </div>
                    <div class="modal-body">
                        {!! view('forms.cnpj')  !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection