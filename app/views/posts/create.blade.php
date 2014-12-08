@section('main')
  <h2>Nuevo Post</h2>
 
  {{ Form::model(new Post, ['route' => ['posts.store'], 'class'=>'form-horizontal', 'role'=>'form']) }}
    @include('posts/partials/_form', ['submit_text' => 'Registrar Post'])
  {{ Form::close() }}
@stop

@section('options')
  <li>{{ link_to_route('posts.index', 'Volver a Posts')}}</li>
@stop