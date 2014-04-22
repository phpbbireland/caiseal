@extends ('layouts.default')

@section('content')
	<h1>All Users</h1>

	@foreach ($users as $user)
		<li>{{ lnk_to("/users/{$user->username}", $user->username) }}</li>
	@endforech
@stop

@section('header')
	HEADER
@stop
@section('footer')
	FOOTER
@stop