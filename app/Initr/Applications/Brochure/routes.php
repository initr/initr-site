<?php

$controllerNamespace = 'Initr\\Applications\\Brochure\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'as' => 'Brochure'], function()
{

	Route::get('/', ['uses' => 'Home@index', 'as' => 'home.index']);
});


App::missing(function($e)
{
	$layout = View::make('_layout');

	$layout->nest('content', '404');

	return $layout;
});
