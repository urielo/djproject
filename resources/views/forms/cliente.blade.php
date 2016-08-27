<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">

        <div class="form-group">
            {{Form::label('nome','Nome')}}
            {{Form::text('nome','',['class'=>"form-control", 'placeholder'=>'Nome do Cliente', 'id'=>'nome','minlength'=>"150", 'data-validation-minlength-message'=>'Numero abaixo do exigido'])}}
        </div>

    </div>
</div>