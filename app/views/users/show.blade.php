@extends('layouts.default')


@section('header')
	<div class="header"><h2>User</h2></div>
@stop


@section('content')
	<div class="box left">
		<h1>Hello {{ $user->username }} {{ $user->id }}</h1>
	</div>
@stop


@section('footer')
@stop