@section('main')
  <h2>Posts</h2>
  @if ( !$posts->count() )
    Aún no se han creado Posts en este Blog, vuelve pronto =)
  @else
    <ul class="list-unstyled">
      @foreach( $posts as $post )
        <li>
          <a href="{{ route('posts.show', $post->id) }}"><strong>{{ $post->titulo }}</strong></a>
          <p>{{ $post->descripcion }}</p>
        </li>
      @endforeach
    </ul>
  @endif

  <p>{{ link_to_route('posts.create', 'Nuevo Post', null, array('class'=>'btn btn-primary')) }}</p>
@stop
