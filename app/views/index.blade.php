<html>
<head>
</head>
<body>
	<h1>Bienvenidos</h1>
	{{ Form::open(['url' => '', 'method' => 'post']) }}
		Username: {{ Form::text('username', '', [
			'placeholder' => 'nombre y apellido',
			'class' => 'usuario'
		]) }}
		{{ Form::submit('Enviar') }}
	{{ Form::close() }}
</body>
</html>
