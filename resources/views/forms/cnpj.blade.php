
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h5 class="modal-title" id="FormLabel">Cadastro de CNPJ</h5>
</div>
<div class="modal-body">
    <div class="row" id="body-modal-cpnj">

        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="row">

                <div class="col-md-3 col-xs-3 col-sm-3">
                    <div class="form-group form-group-sm input-group input-group-sm">
                        {{Form::label('cnpj','CNPJ', ['class'=>'label label-default'])}}
                        {{Form::text('cnpj','',['class'=>"form-control",'tipoinput'=>'cnpj', 'id'=>'cnpj'])}}
                        <span class="input-group-btn" style="padding-top: 20px;">
                 <button class="btn btn-primary"
                         type="button"
                         data-target="#cnpj"
                         href="{{route('get.cnpj','')}}"
                         id="consulta">Buscar
                 </button>
            </span>
                    </div>

                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('rz_social','Razão Social', ['class'=>'label label-default'])}}
                        {{Form::text('rz_social','',['class'=>"form-control",'hidden', 'id'=>'rz_social', ])}}
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('fantasia','Fantasia', ['class'=>'label label-default'])}}
                        {{Form::text('fantasia','',['class'=>"form-control",'hidden', 'id'=>'fantasia'])}}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('cod_atv_principal','Atividade principal', ['class'=>'label label-default'])}}
                        {{Form::text('cod_atv_principal','',['class'=>"form-control",'hidden', 'id'=>'cod_atv_principal'])}}
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('cod_atv_secundarias','Atividade segundaria', ['class'=>'label label-default'])}}
                        {{Form::text('cod_atv_secundarias','',['class'=>"form-control",'hidden', 'id'=>'cod_atv_secundarias'])}}
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('natu_juridica','Natureza juridica', ['class'=>'label label-default'])}}
                        {{Form::text('natu_juridica','',['class'=>"form-control",'hidden', 'id'=>'natu_juridica'])}}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm  input-group input-group-sm">
                        {{Form::label('dt_abertura','Data de abertura', ['class'=>'label label-default'])}}
                        {{Form::text('dt_abertura','',['class'=>"form-control",'hidden', 'tipoinput'=>'data-normal', 'id'=>'dt_abertura'])}}
                        <span class="input-group-btn" style="padding-top: 20px;">
                    <button class="btn btn-secondary"
                            type="button"
                            id=""><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    </button></span>
                    </div>
                </div>

                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm input-group input-group-sm">
                        {{Form::label('cep','CEP', ['class'=>'label label-default'])}}
                        {{Form::text('cep','',['class'=>"form-control",'hidden', 'tipoinput'=>'cep','id'=>'cep'])}}
                        <span class="input-group-btn" style="padding-top: 20px;">
                    <button class="btn btn-secondary"
                            type="button"
                            id=""><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button></span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('logradouro','Logradouro', ['class'=>'label label-default'])}}
                        {{Form::text('logradouro','',['class'=>"form-control",'hidden', 'id'=>'logradouro'])}}

                    </div>
                </div>
                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('numero','Numero', ['class'=>'label label-default'])}}
                        {{Form::text('numero','',['class'=>"form-control",'hidden', 'id'=>'numero'])}}

                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3 col-xs-3 col-sm-3 hide">
                    <div class="form-group form-group-sm ">
                        {{Form::label('bairro','Bairro', ['class'=>'label label-default'])}}
                        {{Form::text('bairro','',['class'=>"form-control",'hidden', 'id'=>'bairro'])}}

                    </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('municipio','Município', ['class'=>'label label-default'])}}
                        {{Form::text('municipio','',['class'=>"form-control",'hidden','id'=>'municipio'])}}

                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('complemento','Complemento', ['class'=>'label label-default'])}}
                        {{Form::text('complemento','',['class'=>"form-control",'hidden', 'id'=>'complemento'])}}
                    </div>
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('uf','UF', ['class'=>'label label-default'])}}
                        {{Form::text('uf','',['class'=>"form-control",'hidden', 'id'=>'uf'])}}

                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3 col-xs-3 col-sm-3 hide">
                    <div class="form-group form-group-sm ">
                        {{Form::label('email','E-mail', ['class'=>'label label-default'])}}
                        {{Form::text('email','',['class'=>"form-control",'hidden', 'id'=>'email'])}}

                    </div>
                </div>
                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('tel','Telefone', ['class'=>'label label-default'])}}
                        {{Form::text('tel','',['class'=>"form-control",'hidden','tipoinput'=>'tel-full','id'=>'tel'])}}

                    </div>
                </div>
                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('sit_cadastral','Situação cadastral', ['class'=>'label label-default'])}}
                        {{Form::text('sit_cadastral','',['class'=>"form-control",'hidden', 'id'=>'sit_cadastral'])}}
                    </div>
                </div>

                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm  input-group input-group-sm">
                        {{Form::label('dt_sit_cadastral','Data situação cad', ['class'=>'label label-default'])}}
                        {{Form::text('dt_sit_cadastral','',['class'=>"form-control",'hidden', 'tipoinput'=>'data-normal', 'id'=>'dt_sit_cadastral'])}}
                        <span class="input-group-btn" style="padding-top: 20px;">
                    <button class="btn btn-secondary"
                            type="button"
                            id=""><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    </button></span>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('mt_sit_cadastral','MT situação', ['class'=>'label label-default'])}}
                        {{Form::text('mt_sit_cadastral','',['class'=>"form-control",'hidden', 'id'=>'mt_sit_cadastral'])}}
                    </div>
                </div>

            </div>

            <div class="row">


                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('st_especial','Situação especial', ['class'=>'label label-default'])}}
                        {{Form::text('st_especial','',['class'=>"form-control",'hidden', 'id'=>'st_especial'])}}
                    </div>
                </div>

                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm  input-group input-group-sm">
                        {{Form::label('dt_st_especial','Data situação esp', ['class'=>'label label-default'])}}
                        {{Form::text('dt_st_especial','',['class'=>"form-control",'hidden', 'tipoinput'=>'data-normal', 'id'=>'dt_st_especial'])}}
                        <span class="input-group-btn" style="padding-top: 20px;">
                    <button class="btn btn-secondary"
                            type="button"
                            id=""><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    </button></span>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2 col-sm-2 hide">
                    <div class="form-group form-group-sm">
                        {{Form::label('recid','Recid', ['class'=>'label label-default'])}}
                        {{Form::text('recid','',['class'=>"form-control",'hidden', 'id'=>'recid'])}}
                    </div>
                </div>

            </div>


        </div>
    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Fechar</button>
    <button type="button" class="btn btn-primary" id="cnpj-btn-enviar">Inserir</button>
</div>

