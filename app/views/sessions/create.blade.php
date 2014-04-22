@extends ('layouts.default')

@section('header')
<div class="header"><h2>Login Page</h2></div>
@stop

@section('content')
<div class="loginout">
	{{ Form::open(['route' => 'sessions.store']) }}
	<div class="box">
		<div class="form_elem">
			<h2 style="text-align:center;">Members Login</h2>
			{{ Form::label('email', 'Email: ')}}
			{{ Form::email('email') }}
		</div>
		<div class="form_elem">
			{{ Form::label('password', 'Password: ')}}
			{{ Form::password('password') }}
		</div>
		<div class="form_elem">{{ Form::submit('Login') }}</div>
	{{ Form::close() }}
	</div>
</div>
@stop

@section('footer')
<div class="footer">
	<a href="./pages">Pages</a> &bull;
	<a href="./about">About</a> &bull;
	<a href="./users">Users</a> &bull;
	<a href="./login">Login</a> &bull;
	<a href="./admin/panel">ACP</a>
	<div class="copyright">
		<a class="copyright" href="#">Caisean by Mike</a>
	</div>
</div>
@stop