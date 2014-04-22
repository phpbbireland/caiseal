@extends ('layouts.default')

@section('header')
<div class="header"><h2>Admin Control Panlel</h2></div>
@stop

@section('content')
admin panel Welcome
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