<?php

class PagesController extends BaseController {

/*
	public function showPages()
	{
		return View::make('pages');
	}
*/
	//public $path = 'pages/';

	public function home()
	{
		/*
		$path = base_path();
		$path = app_path();
		*/
		$path = 'pages/';

		return View::make('home')->with('path', $path);

		//return View::make('pages')->with('path', base_path());
		//return View::make('pages')->with('path', public_path());
	}


	public function about()
	{
		//$home = './../';
		//return View::make('pages/about');
		//return View::make('pages/about')->with('page', $home);
		//$path = '/';
		//return View::make('pages/about')->with('path', $path);

		return View::make('pages/about');

	}
	public function download()
	{
		return View::make('pages/download');
	}
	public function contribute()
	{
		return View::make('pages/contribute');
	}
	public function contact()
	{
		return View::make('pages/contact');
	}
	public function ucp()
	{
		return View::make('pages/ucp');
	}

	public function search()
	{
		return View::make('pages/search');
	}

	public function portal()
	{
		return View::make('forum/portal');
	}
}