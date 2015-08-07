{!! Form::open(['method' => 'GET', 'url' => url('search')]) !!}

	{!! Form::text('q', old('q')) !!}
	{!! Form::submit('Go') !!}

{!! Form::close() !!}