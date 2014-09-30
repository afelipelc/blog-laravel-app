@section('main')
@if ( !$post )
   No se encontró la publicación
@else
  <h2>{{ $post->titulo }}</h2>
  <span>Por: {{ $post->user->nombre }} el {{ $post->user->created_at }}</span>
  <p>
      {{ $post->contenido }}
  </p>
  <p><strong>Tags: </strong> {{ $post->tags }}
  <p>
@endif

  <p>
    <a href="{{ route('posts.index') }}">Volver a Posts</a>
  </p>
@stop