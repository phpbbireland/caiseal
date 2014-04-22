@section('head')
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="js/code.js"></script>
		<style>
			@import url(//fonts.googleapis.com/css?family=Lato:700);
		</style>
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/social.css') }}" />
	</head>
	<body>
@show

@section('header')
	<div class="header">
	<div class="header_wrap">
		<a href="{{ URL::to('/') }}"><div class="logo"></div></a>
		<div class="header_body">
@show

@section('header_menu')

	<div class="header_menu">
		<ul class="none">
			<li class="about"><a href="{{ URL::to('pages/about') }}" title="About"><span></span>About</a></li>
			<li class="contact"><a href="{{ URL::to('pages/contact') }}" title="Contact Us"><span></span>Contact Us</a></li>
			<li class="contribute"><a href="{{ URL::to('pages/contribute') }}" title="Contribute to Caiseal"><span></span>Contribute</a></li>
			<li class="download"><a href="{{ URL::to('pages/download') }}" title="Download"><span></span>Download</a></li>
			<li class="forum"><a href="{{ URL::to('forum/portal') }}" title="Forum"><span></span>Forum</a></li>
			<li class="search"><a href="{{ URL::to('search') }}" title="Search site"><span></span>Search</a></li>
			<li class="login"><a href="ucp?mode=login&amp;id=" title="Logout [ Michaelo ]"><span></span>Login</a></li>
			<!--
			<li class="logout"><a href="ucp?mode=logout&amp;id=" title="Logout [ Michaelo ]"><span></span>Logout</a></li>
			-->
		</ul>
	</div>
</div>
@show



	@section('content_top')
		</div>
	</div>

		<div id="wrap">
			<div id="p_header_"><!-- PUT HEADER BLOCKS HERE --></div>
			<div id="p_container_">
				<div id="p_row_">
	@show

		@section('navigation')
		<div id="left" style="width:200px;">
			<div class="l_block_vert_gap">
				<div class="sgp-corners sgp-gap">
					<div class="box" id="1">
						<div class="block_data">
							<div id="my_menu" class="sdmenu">
								<div class="nav_menu">
									<span class="sub_heading handle">Navigation...</span>
									<span class="menu_item"><a href="{{ URL::to('/') }}">Home</a></span>
									<span class="menu_item"><a href="{{ URL::to('pages/about') }}">About</a></span>
									<span class="menu_item"><a href="{{ URL::to('users') }}">Users</a></span>
									<span class="menu_item"><a href="{{ URL::to('users/1') }}">Mike</a></span>
									<span class="menu_item"><a href="{{ URL::to('users/2') }}">Sam</a></span>
									<span class="menu_item"><a href="{{ URL::to('login') }}">Login</a></span>
									<span class="menu_item"><a href="{{ URL::to('logout') }}">Logout</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@show
		</div>

		@section('content_middle')
			<div id="center">
				<div class="sgp-corners sgp-gap">
					<div class="box main" id="2">
						@section('content_main')
						<div class="content_main">
							@show
						</div>
					</div>
				</div>
			</div><!-- close center -->
		@show

		@section('content_end')
				<div class="r_block_vert_gap" style="width:0;" id="right"></div>
				</div><!-- close p_row_ -->
			</div><!-- close p_container_ -->

			<div class="box" style="font-size: 0.8em; font-weight: 500; background: #F2F2F2; width:auto; margin: 10px 0 10px 0; border: solid 1px #CCC; text-align: right; padding-right: 5px;">
				<a href="'">Some info</a>
			</div>
		</div><!-- close wrap -->
		@show

		@section('footer')
		<div class="footer">
			<a href="{{ URL::to('/') }}">Home</a> &bull;
			<a href="{{ URL::to('pages/about') }}">About</a> &bull;
			<a href="{{ URL::to('users') }}">Users</a> &bull;
			<a href="{{ URL::to('login') }}">Login</a> &bull;
			<a href="{{ URL::to('admin/panel') }}">ACP</a>
			<div class="copyright">
				<a class="copyright" href="#">Caiseal by Michéal Ó Tuathail</a>
			</div>
			@show
		</div>
@section('foot')
	</body>
</html>
@show