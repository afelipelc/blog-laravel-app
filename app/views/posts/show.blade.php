@section('main')
  <h2>{{ $post->titulo }}</h2>
  <span>Por: <em>{{ $post->user->nombre }}</em> 
  el {{ $post->created_at }}</span>
  <p>
      {{ $post->contenido }}
  </p>
  <p><strong>Tags: </strong> {{ $post->tags }}
  </p>

  <div>
  <h4>Comentarios</h4>
    @foreach($post->comments as $comment)
      <div style="border: 1px solid #ccc; margin-bottom:4px;">
        <span>{{$comment->user->nombre}} el {{$comment->created_at}}</span>
        <span class="list-inline">
          {{ Form::open(array('class' => 'form-horizontal pull-right', 'method' => 'DELETE', 'route' => array('posts.comments.destroy', $post->id, $comment->id))) }}
            {{ Form::submit('Eliminar', array('class' => 'btn btn-sm btn-danger')) }}
          {{ Form::close() }}
        </span>
        <p>{{$comment->comentario}}</p>
      </div>
    @endforeach
  </div>

  <div class="form-group" style="padding-top:24px;">
    <h4>Agregar comentario:</h4>
  </div>
  @include('comments/partials/_comment')
    
@stop

@section('options')
  <li>{{ link_to_route('posts.edit', 'Editar', array($post->id))}}</li>
  <li>{{ link_to_route('posts.index', 'Volver a Posts')}}</li>
@stop