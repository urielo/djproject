{{--{!! Form::open(['route'=>'cpnj.create', 'method'=>'post','id'=>'form-cnpj']) !!}--}}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h5 class="modal-title" id="FormLabel">Cadastro de Endereço</h5>
</div>
<div class="modal-body">
    <div class="row" id="body-modal-endereco">

        <div class="col-md-12 col-xs-12 col-sm-12">


            <div class="row">


                <div class="col-md-2 col-xs-2 col-sm-2 ">
                    <div class="form-group form-group-sm input-group input-group-sm">
                        {{Form::label('cep','CEP', ['class'=>'label label-default'])}}
                        {{Form::text('cep','',['class'=>"form-control", 'tipoinput'=>'cep','id'=>'cep'])}}
                        <span class="input-group-btn" style="padding-top: 20px;">
                    <button class="btn btn-primary"
                            type="button"
                            id="busca-cep"
                            data-target-cep="#cep"
                            data-target-logr="#logradouro"
                            data-target-bair="#bairro"
                            data-target-uf="#uf"
                            data-target-muni="#municipio" >
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button></span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 ">
                    <div class="form-group form-group-sm">
                        {{Form::label('logradouro','Logradouro', ['class'=>'label label-default'])}}
                        {{Form::text('logradouro','',['class'=>"form-control", 'id'=>'logradouro'])}}

                    </div>
                </div>
                <div class="col-md-2 col-xs-2 col-sm-2 ">
                    <div class="form-group form-group-sm">
                        {{Form::label('numero','Numero', ['class'=>'label label-default'])}}
                        {{Form::text('numero','',['class'=>"form-control", 'id'=>'numero'])}}

                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4 col-xs-4 col-sm-4 ">
                    <div class="form-group form-group-sm">
                        {{Form::label('complemento','Complemento', ['class'=>'label label-default'])}}
                        {{Form::text('complemento','',['class'=>"form-control", 'id'=>'complemento'])}}
                    </div>
                </div>

                <div class="col-md-3 col-xs-3 col-sm-3 ">
                    <div class="form-group form-group-sm ">
                        {{Form::label('bairro','Bairro', ['class'=>'label label-default'])}}
                        {{Form::text('bairro','',['class'=>"form-control", 'id'=>'bairro'])}}

                    </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3 ">
                    <div class="form-group form-group-sm">
                        {{Form::label('municipio','Município', ['class'=>'label label-default'])}}
                        {{Form::text('municipio','',['class'=>"form-control",'id'=>'municipio'])}}

                    </div>
                </div>

                <div class="col-md-1 col-xs-1 col-sm-1 ">
                    <div class="form-group form-group-sm">
                        {{Form::label('uf','UF', ['class'=>'label label-default'])}}
                        {{Form::text('uf','',['class'=>"form-control", 'id'=>'uf'])}}

                    </div>
                </div>

            </div>




        </div>
    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
    <button type="button" class="btn btn-primary" id="end-btn-enviar">Inserir</button>
</div>


