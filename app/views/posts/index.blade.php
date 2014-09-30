@section('main')
  <h2>Posts</h2>
  @if ( !$posts->count() )
    Aún no se han creado Posts en este Blog, vuelve pronto =)
  @else
    <ul>
      @foreach( $posts as $post )
        <li>
          <a href="{{ route('posts.show', $post->id) }}"><strong>{{ $post->titulo }}</strong></a>
          <p>{{ $post->descripcion }}</p>
        </li>
      @endforeach
    </ul>
  @endif
@stop