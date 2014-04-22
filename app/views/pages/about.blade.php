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
		<div class="clear"></div>
		<div class="box_info even">
			<div class="box_info_body">
				<div class="xpostbody">
					<div class="date_img">
						<span class="month_img">Apr 2014</span>
						<span class="day_img">13</span>
					</div>
					<h3><a href="./viewtopic.php?t=4190">Simple Forum Development</a></h3>
					<div class="content2">
						<span style="font-weight: bold">Development:</span><br />
						I have played around with the idea of building a forum using Laravel since I was introduced to Laravel about a year ago...<br /><br />
						<span style="font-weight: bold">Where to begin:</span><br />
						First, I had to learn eenough about Laravel to even make a start but it seemed the easiest to learn allowing for the fact it was right at the top of the pile so no having to restructure and start again with another framework...<br /><br />

						Learning Laravel has been a bit of a battle for an old man but I'm getting there slowly...<br />
						<br />
						<a href="#">Mike</a>

					</div>
				</div>
			</div>
			<div class="more">
				<a href="./viewtopic.php?t=4190">read more</a>
			</div>
		</div>
		<div class="box_info odd">
			<div class="box_info_body">
				<div class="xpostbody">
					<div class="date_img">
						<span class="month_img">May 2013</span>
						<span class="day_img">26</span>
					</div>
					<h3><a href="./viewtopic.php?t=4190">Test reproduction of code</a></h3>
					<div class="content2">
						<span style="font-weight: bold">New developer</span><br />We are happy to announce that <a href="http://phpbbsocialnetwork.com/profile.php?u=2874" class="postlink">Senky</a> has joined us as a new developer. We hope that it speeds the development of phpBB Social Network up and we will be able to release new versions more often.<br /><br /><span style="font-weight: bold">GitHub</span><br />We have also decided to move the development of <a href="https://github.com/phpBB-Social-Network" class="postlink">phpBB SN to GitHub</a>. Since now, every developer is able to fork SN repository, fix a bug or add a new feature and send it to us as a Pull ...
						<span style="font-weight: bold">New developer</span><br />We are happy to announce that <a href="http://phpbbsocialnetwork.com/profile.php?u=2874" class="postlink">Senky</a> has joined us as a new developer. We hope that it speeds the development of phpBB Social Network up and we will be able to release new versions more often.<br /><br /><span style="font-weight: bold">GitHub</span><br />We have also decided to move the development of <a href="https://github.com/phpBB-Social-Network" class="postlink">phpBB SN to GitHub</a>. Since now, every developer is able to fork SN repository, fix a bug or add a new feature and send it to us as a Pull ...
					</div>
				</div>
			</div>
			<div class="more">
				<a href="#">read more</a>
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

@section('foot')
	@parent
@stop