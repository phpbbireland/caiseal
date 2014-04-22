@extends ('layouts.default')

@section('head')
	@parent
@stop

@section('header')
	@parent
	<h1><a class="white" href="#">UCP</a></h1>
@stop


@section('content_top')
	@parent
@stop

@section('navigation')
	@parent
	@include('pages.partials.links')
@stop

@section('content_middle')
	@parent
	@section('content_main')
		@parent

	This is the User Control Panel.....

	@stop
@stop

@section('content_end')
	@parent
@stop

@section('footer')
	@parent
	more info...
@stop