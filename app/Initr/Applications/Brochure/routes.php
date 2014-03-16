<?php

$controllerNamespace = 'Initr\\Applications\\Brochure\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'as' => 'Brochure'], function()
{
	Route::get('/', ['uses' => 'Home@index', 'as' => 'home.index']);
	Route::get('example', ['uses' => 'Home@example', 'as' => 'home.example']);
});


App::missing(function($e)
{
	$layout = View::make('_layout');

	$layout->nest('content', 'App::404');

	return $layout;
});
