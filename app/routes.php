<?php

// Cuando se consulte la raiz del sitio / se ejecutará el controlador
// HomeController la funcion index
Route::get('/', 'HomeController@index');

Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@ingresar');


