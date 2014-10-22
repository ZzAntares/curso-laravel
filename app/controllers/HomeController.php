<?php

class HomeController extends BaseController {

public function __construct()
{
	$this->beforeFilter("auth");
}
	public function index()
	{
		$usuarios = ['manuel', 'alma', 'carlos'];

		$datos = [
			'clientes' => $usuarios,
		];

		return View::make('index', $datos);
	}

}
