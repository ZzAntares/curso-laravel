<?php
/**
* 
*/
class LoginController extends BaseController
{
	
	public function login()
	{
		return View:: make('login');
	}
	public function ingresar()
	{
		//dd(Input::all()); //muestra los valores en pantalla
		//autenticar
		$datos=[
		"password"=>Input::get("clave"),
		"usuario"=>Input::get("usuario")
		];
		//dd($datos);
		$log=Auth::attempt($datos);
		if($log){
			return Redirect::action("HomeController@index");
		}else{
			return Redirect::to("login");
		}
	}
	public function logout(){
		Auth::logout();
		return Redirect::to("login")->with("msj","Vuelve Pronto");
	}
}
?>