<div class="row">
    <div class="col-md-6 col-xs-6 col-sm-6">

        <div class="form-group">
            {{Form::label('cnpj','CNPJ')}}
            {{Form::text('cnpj','',['class'=>"form-control",'tipoinput'=>'cnpj', 'id'=>'cnpj'])}}
        </div>
        <button type="button" class="btn btn-info" data-target="#cnpj" id="consulta">Consulta</button>

    </div>
</div>