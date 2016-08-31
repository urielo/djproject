
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h5 class="modal-title" id="FormLabel">Cadastro de Contato</h5>
</div>
<div class="modal-body">
    <div class="row" id="body-modal-contac">

        <div class="col-md-12 col-xs-12 col-sm-12">


            <div class="row">

                <div class="col-md-4 col-xs-4 col-sm-4 ">
                    <div class="form-group form-group-sm input-group input-group-sm">
                        {{Form::label('nome_contato','Nome do contato', ['class'=>'label label-default'])}}
                        {{Form::text('nome_contato','',['class'=>"form-control", 'data-contato','id'=>'nome_contato'])}}

                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4 ">
                    <div class="form-group form-group-sm">
                        {{Form::label('departamento','Departamento do contato', ['class'=>'label label-default'])}}
                        {{Form::text('departamento','',['class'=>"form-control", 'data-contato','id'=>'departamento'])}}

                    </div>
                </div>

            </div>
            <h5>Telefone</h5>
            <hr style="margin-top: 5px">

            <button type="button" data-target="#telefone" class="btn btn-success btn-xs pull-right" id="add-tel"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
            <div class="row" id="telefone">

                <div class="col-md-5 col-xs-5 col-sm-5" id="tel-0">
                  <div class="row">

                      <div class="form-group form-group-sm col-md-3">
                          {{Form::label(null,'DDD ', ['class'=>'label label-default'])}}
                          {{Form::text('telefone][0][ddd]','',['class'=>"form-control",'tipoinput'=>'ddd','id'=>'tel-ddd-0'])}}
                      </div>

                      <div class="form-group form-group-sm col-md-4">
                          {{Form::label(null,'Numero', ['class'=>'label label-default'])}}
                          {{Form::text('telefone][0][numero]','',['class'=>"form-control",'tipoinput'=>'telcel', 'id'=>'tel-num-0'])}}
                      </div>

                      <div class="form-group form-group-sm col-md-5">
                          {{Form::label(null,'Tipo de telefone', ['class'=>'label label-default'])}}
                          {{Form::text('telefone][0][tipo]','',['class'=>"form-control", 'id'=>'tel-tipo-0'])}}
                      </div>
                  </div>
                </div>

            </div>
            <h5>Email</h5>
            <hr style="margin-top: 5px">

            <button type="button" data-target="#email" class="btn btn-success btn-xs pull-right" id="add-mail"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
            <div class="row" id="email">

                <div class="col-md-7 col-xs-7 col-sm-7" id="mail-0">
                    <div class="row">
                        <div class="col-md-7 col-xs-7 col-sm-7 form-group form-group-sm">
                            {{Form::label(null,'E-mail ', ['class'=>'label label-default'])}}
                            {{Form::email('email][0][email]','',['class'=>"form-control", 'id'=>'email-0'])}}
                        </div>
                        <div class="col-md-5 col-xs-5 col-sm-5 form-group form-group-sm">
                            {{Form::label(null,'Tipo de email', ['class'=>'label label-default'])}}
                            {{Form::text('email][0][tipo]','',['class'=>"form-control", 'id'=>'tipo-0'])}}
                        </div>
                    </div>
                </div>



            </div>




        </div>
    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Fechar</button>
    <button type="button" class="btn btn-primary" id="contac-btn-enviar">Inserir</button>
</div>


