@extends ('layouts.default')

@section('head')
	@parent
@stop

@section('header')
	@parent
	<h1><a class="white" href="#">About Caiseal</a></h1>
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

	<h3>About Caiseal.....</h3>

	<div width="100%" style="margin-left: auto; margin-right: auto; margin-top: 0;">

	<div width="100%" style="margin-left: auto; margin-right: auto; margin-top: 0;">
		<div class="clear"></div>
		<div class="box_info">
			<div class="box_info_body">
				<div class="postbody">
					<div class="date_img">
						<span class="month_img">Apr 2014</span>
						<span class="day_img">13</span>
					</div>
					<h3><a href="#">Caiseal Forum Development</a></h3>
					<div class="content2">
						<span style="font-weight: bold">Source:</span><br />
						Please see development on <a href="https://github.com/phpbbireland">Github</a><br /><br />
						<span style="font-weight: bold">Background:</span><br />
						For the past ten years I've been busy working on the <a href="phpbbireland.com">Kiss Portal Engine</a> and other mods for the <a href="phpbb3.com">phpBB3</a> forum...
						<br /><br />
						I choose Laravel as the development framework as Symfony scared the hell out of me... I'm still on medication :D
						<br /><br />
						...
						<br /><br />
						<a href="#">Mike</a>
						<br /><br />
					</div>
				</div>
			</div>
			<div class="more">
				<a href=".#">read more</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>

		<div class="clear"></div>
		<div class="box_info even">
			<div class="box_info_body">
				<div class="xpostbody">
					<div class="date_img">
						<span class="month_img">Apr 2014</span>
						<span class="day_img">13</span>
					</div>
					<h3><a href="#">Simple Forum Development</a></h3>
					<div class="content2">
						<span style="font-weight: bold">Development:</span><br />
						I have played around with the idea of building a forum using Laravel since I was introduced to Laravel about a year ago...<br /><br />
						<span style="font-weight: bold">Where to begin:</span><br />
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br /><br />

						Learning Laravel has been a bit of a battle for an old man but I'm getting there slowly...<br />
						<br />
						<a href="#">Mike</a>

					</div>
				</div>
			</div>
			<div class="more">
				<a href="#">read more</a>
			</div>
		</div>
		<div class="box_info odd">
			<div class="box_info_body">
				<div class="xpostbody">
					<div class="date_img">
						<span class="month_img">May 2013</span>
						<span class="day_img">26</span>
					</div>
					<h3><a href="#">Test post</a></h3>
					<div class="content2">
						<span style="font-weight: bold">Test Post:</span><br />
						A test post to display some of the styling we use based on a very nice site...<br /><br />
						<span style="font-weight: bold">Where to begin:</span><br />
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br /><br />

						Learning Laravel has been a bit of a battle for an old man but I'm getting there slowly...<br />
						<br />
						<a href="#">Mike</a>
					</div>
				</div>
			</div>
			<div class="more">
				<a href="#">read more</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>


	@stop
@stop

@section('content_end')
	@parent
@stop

@section('footer')
	@parent
@stop

@section('foot')
	@parent
@stop