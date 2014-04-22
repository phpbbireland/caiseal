@extends ('layouts.default')

@section('head')
	@parent
@stop

@section('header')
	@parent
	<h1><a class="white" href="#">Download Page</a></h1>
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

	<h3>Download Caiseal.....</h3>

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
		<div style="clear"></div>
	</div>
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
						<br />The Kiss Portal Engine mod was the first mod written for phpBB3 and I believe it's also the largest (I could be wrong but don't think so)... I should also mention I'm a C programmer and new to classes and oop's...
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
		<div style="clear"></div>
	</div>
	<div width="100%" style="margin-left: auto; margin-right: auto; margin-top: 0;">
		<div class="clear"></div>
		<div class="box_info">
			<div class="box_info_body">
				<div class="postbody">
					<div class="date_img">
						<span class="month_img">Apr 2014</span>
						<span class="day_img">22</span>
					</div>
					<h3><a href="#">Caiseal Forum Development II</a></h3>
					<div class="content2">
						<span style="font-weight: bold">Required:</span><br />
						<ol>
							<li><a href="https://github.com/phpbbireland/caiseal">Caiseal</a>...</li>
							<li><a href="http://laravel.com/">Laravel 4.2</a>...</li>
							<li><a href="https://getcomposer.org/">Composer</a>...</li>
							<li>Patients...</li>
						</ol>
						<span style="font-weight: bold">Optional:</span><br />
						<ol>
							<li><a href="http://www.jacklmoore.com/colorbox/">Colorbox</a> (jQuery Opensource)</li>
						</ol>
						<a href="#">Mike</a>
						<br /><br />
					</div>
				</div>
			</div>
			<div class="more">
				<a href=".#">read more</a>
			</div>
		</div>
		<div style="clear"></div>
	</div>

	@stop
@stop

@section('content_end')
	@parent
@stop

@section('footer')
	@parent
	more info...
@stop