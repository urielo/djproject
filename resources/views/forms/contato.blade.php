<div class="row">
    <div class="col-md-6 col-xs-6 col-sm-6">
        <div class="form-group">
            {{Form::label('nome','Nome')}}
            {{Form::text('nome','',['class'=>"form-control", 'placeholder'=>'Nome do Contato', 'id'=>'nome'])}}
        </div>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4">
        <div class="form-group">
            {{Form::label('departamento','Departamento')}}
            {{Form::text('departamento','',['class'=>"form-control", 'placeholder'=>'Departamento', 'id'=>'departamento'])}}
        </div>
    </div>
</div>
