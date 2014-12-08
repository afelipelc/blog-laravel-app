@section('main')
  <h2>Nuevo Comentario</h2>

  @include('comments/partials/_comment', ['submit_text' => 'Registrar Post'])
@stop