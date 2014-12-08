<div class="form-group">
  <div class="col-sm-10">
    {{ Form::text('titulo', null,array('placeholder'=>'Título del Post','class' => 'form-control', 'autofocus'=>'autofocus')) }}
  </div>
</div>
<div class="form-group">
  <div class="col-sm-10">
    {{ Form::text('descripcion', null ,array('placeholder'=>'Descripción', 'class' => 'form-control')) }}
  </div>
</div>
<div class="form-group">
  {{ Form::label('tags', 'Imagen:', array('class'=>'col-sm-2 control-label')) }}
  <div class="col-sm-8">
  {{ Form::text('imagen', 'imagen') }}
  <input type="file" id="exampleInputFile">
   <p class="help-block">Seleccionar imagen -aún no funciona-.</p>
  </div>
</div>
<div class="form-group">
  {{ Form::label('tags', 'Contenido:', array('class'=>'col-sm-2 control-label')) }}
</div>
<div class="form-group">
  <div class="col-sm-10">
    {{ Form::textarea('contenido', null, array('placeholder'=>'Contenido del post', 'class' => 'form-control')) }}
  </div>
</div>
<div class="form-group">
    {{ Form::label('tags', 'Etiquetas:', array('class'=>'col-sm-2 control-label')) }}
  <div class="col-sm-8">
    {{ Form::text('tags', null, array('placeholder'=>'... , ...', 'class' => 'form-control')) }}
  </div>
</div>
<div class="form-actions">
  {{ Form::submit($submit_text, array('class'=>'btn btn-primary btn-lg')) }}
</div>