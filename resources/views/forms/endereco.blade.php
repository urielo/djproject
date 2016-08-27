<div class="row">
    <div class="col-md-5 col-xs-4 col-sm-5">
        <div class="form-group">
            {{Form::label('cep','CEP')}}
            {{Form::text('cep','',['class'=>"form-control", 'tipoinput'=>'cep', 'id'=>'cep'])}}
        </div>
    </div>
    <div class="col-md-6 col-xs-6 col-sm-6">
        <div class="form-group">
            {{Form::label('departamento','Departamento')}}
            {{Form::text('departamento','',['class'=>"form-control", 'placeholder'=>'Departamento', 'id'=>'departamento'])}}
        </div>
    </div>
</div>
