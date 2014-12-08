  {{ Form::model(new Comment, 
  ['route' => ['posts.comments.store', $post->id], 'class'=>'form-horizontal', 'role'=>'form']) }}

    @include('comments/partials/_form', 
    ['submit_text' => 'Comentar...'])

  {{ Form::close() }}
  