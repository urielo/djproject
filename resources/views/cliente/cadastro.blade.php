@extends('layouts.backend')
@section('title','Testes')
@section('content')

    <div class="container-fluid">
        {!! Form::open(['route'=>'cliente.create', 'method'=>'post','id'=>'form-cnpj']) !!}

        <div class="row">
            <div class="col-md-4 col-xs-4">
                <div class="form-group form-group-sm">
                    {{Form::label('nome_cliente','Cliente', ['class'=>'label label-info'])}}
                    {{Form::text('nome_cliente','',['class'=>"form-control", 'id'=>'nome_cliente', 'placeholder'=>'Nome do cliente' ])}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xs-6 ">
                <div class="panel panel-primary">

                    <div class="panel-heading">Cadastro de CNPJs</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                                <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal"
                                        href="{{route('cpnj.form')}}"
                                        data-target="#cadastros">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class="table table-hover table-condensed hidden" id="cnpj-table" style="font-size: 12px">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>CNPJ</th>
                            <th>Razão Social</th>
                            <th>Excluir</th>

                        </tr>
                        </thead>
                        <tbody id="cnpj-body-table">
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6 col-xs-6 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">Cadastro de Contatos</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 pull-right">
                                <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal"
                                        href="{{route('contato.form')}}"
                                        data-target="#cadastros">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class="table table-hover table-condensed hide" id="contato-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Departamento</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Excluir</th>

                        </tr>
                        </thead>
                        <tbody id="contato-body-table">

                        </tbody>
                    </table>
                </div>

            </div>


        </div>

        <div class="row">

            <div class="col-md-12 col-xs-12 ">
                <div class="panel panel-primary">

                    <div class="panel-heading">Cadastro Endereços</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary btn-xs pull-left" data-toggle="modal"
                                        href="{{route('endereco.form')}}"
                                        data-target="#cadastros">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class="table table-hover table-condensed hide" style="font-size: 12px" id="end-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>CEP</th>
                            <th>Logradouro</th>
                            <th>Numero</th>
                            <th>Complemento</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody id="end-body-table">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="cadastros" tabindex="-1" role="dialog" aria-labelledby="Form" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Enviar',['class'=>'btn btn-primary pull-right']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection