<div class="form-group">
  <div class="col-sm-12">
    {{ Form::textarea('comentario', null, array('placeholder'=>'Escribe aquí tu comentario', 'class' => 'form-control')) }}
  </div>
</div>
<div class="form-actions">
    {{ Form::submit($submit_text,array('class'=>'btn btn-primary')) }}
</div>