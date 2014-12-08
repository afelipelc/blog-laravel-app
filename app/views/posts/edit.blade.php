@section('main')
  <h2>Editar Post</h2>
 
  {{ Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->id], 'class'=>'form-horizontal', 'role'=>'form']) }}
    @include('posts/partials/_form', ['submit_text' => 'Actualizar'])
  {{ Form::close() }}
@stop

@section('options')
  <li>{{ link_to_route('posts.index', 'Volver a Posts')}}</li>
@stop