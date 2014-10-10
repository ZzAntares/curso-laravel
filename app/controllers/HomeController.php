<?php

class HomeController extends BaseController {

	public function index()
	{
		$usuarios = ['manuel', 'alma', 'carlos'];

		$datos = [
			'clientes' => $usuarios,
		];

		return View::make('index', $datos);
	}

}
