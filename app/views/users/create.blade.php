@extends('layouts.default')

@section('header')
<div class="header"><h2>Create New User</h2></div>
@stop

@section('content')
	{{ Form::open(['route' => 'users.store']) }}
		<div class="box">
			<div class="form_elem">
				{{ Form::label('username', 'Username: ') }}
				{{ Form::text('username') }}
			</div>
			<div class="form_elem">
				{{ Form::label('email', 'Email: ') }}
				{{ Form::email('email') }}
			</div>
			<div class="form_elem">
				{{ Form::label('password', 'Password: ') }}
				{{ Form::password('password') }}
			</div>
			<div class="form_elem">{{ Form::submit('Create User') }}</div>
		</div>
	{{ Form::close() }}
@stop

@section('footer')
<div class="footer">
	<a href="./pages">Pages</a> &bull;
	<a href="./about">About</a> &bull;
	<a href="./login">Users</a> &bull;
	<a href="./login">Login</a> &bull;
	<a href="./users">ACP</a>
	<div class="copyright">
		<a class="copyright" href="#">Caisean by Mike</a>
	</div>
</div>
@stop