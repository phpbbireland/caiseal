<?php

class SessionsController extends BaseController {

	public function create()
	{
		if (Auth::check()) return Redirect::to('/admin');

		return View::make('sessions.create');
	}

	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password')))
		{
			//return View::make('admin/panel')->with($name);
			return View::make('admin/panel');
		}
		return Redrect::back()->withInput();
	}
	public function destroy()
	{
		Auth::logout();
		return Redirect::route('sessions.create');
	}
}