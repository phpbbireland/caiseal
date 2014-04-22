@extends('layouts.default')

@section('header')
<div class="header"><h2>All Users</h2></div>
@stop

@section('content')
	@if ($users->count())
		<div class="box left">
			@foreach ($users as $user)
				{{ link_to("/users/{$user->id}", $user->username) }}<br />
			@endforeach
		</div>
	@else
		<p>No users</p>
	@endif
@stop

@section('footer')
@stop