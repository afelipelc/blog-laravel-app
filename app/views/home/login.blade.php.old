@section('main')
{{ Form::open(array('url' => 'login')) }}
  <h1>Login</h1>

  <!-- if there are login errors, show them here -->
  <p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
  </p>

  <p>
    {{ Form::label('username', 'Nombre de usuario') }}
    {{ Form::text('username') }}
  </p>

  <p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
  </p>

  <p>{{ Form::submit('Ingresar') }}</p>
{{ Form::close() }}
@stop
