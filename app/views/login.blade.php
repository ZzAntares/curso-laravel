<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1>Ingresar</h1>
	{{ Form::open(['url' => 'login', 'method' => 'POST']) }}
		Usuario: {{ Form::text('username') }}<br>
		Contraseña: {{ Form::password('password') }}<br>
		{{ Form::submit('Entrar') }}
	{{ Form::close() }}
</body>
</html>
