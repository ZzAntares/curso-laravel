<?php

class LoginController extends BaseController
{
	public function login()
	{
		return View::make('login');

	}

	public function ingresar()
	{
		dd(Input::all());
	}

}

