@extends ('layouts.default')

@section('head')
	@parent
@stop

@section('header')
	@parent
	<h1><a class="white" href="#">Forum</a></h1>
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

	This is the Forum page.....

	@stop
@stop

@section('content_end')
	@parent
@stop
@section('footer')
	@parent
	100% CSS3 Compliant
@stop