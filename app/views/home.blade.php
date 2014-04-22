@extends ('layouts.default')

@section('head')
	@parent
@stop

@section('header')
	@parent
	<h1><a class="white" href="#">Home Page</a></h1>
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
		This is the main contents with a class of <i>"content_main"</i>. This completes the blade layout for now...<br /></br />
		<u>Next we just have to test it out to see if there are any issues...</u><br />
		You are welcome to contribute. Use the Htmlpedia button above to edit the help. It will be included in next versions of the extension.<br />
		<br />
		<br />
		<strong><u>If juery is working, code below will have numbers!!!</u></strong><br /><br />

<pre class="code numbered">
Route::get('/', 'PagesController@pages');

Route::get('login', function()
{
	return View::make('login');
})->before('auth');

Route::resource('users', 'UserController');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('admin', function()
{
	return 'Admin Page.....';
})->before('auth');

Route::get('pages', 'PagesController@pages');
Route::get('/about', 'PagesController@about');</pre>
<br />Mike O
<script type="text/javascript">wrapLines($('.numbered')[0])</script>

	@stop
@stop

@section('content_end')
	@parent
@stop

@section('footer')
	@parent
	more info...
@stop