<?php

$controllerNamespace = 'Initr\\Applications\\Login\\Controllers';

Route::group(['namespace' => $controllerNamespace, /*'as' => 'Login' */], function()
{
	Route::get('login', ['uses' => 'Session@create', 'as' => 'Login.session.create']);
	Route::post('login', ['uses' => 'Session@store', 'as' => 'Login.session.store']);
	Route::get('logout', ['uses' => 'Session@destroy', 'as' => 'Login.session.destroy']);

	Route::get('signup', ['uses' => 'Users@create', 'as' => 'Login.users.create']);
	Route::post('signup', ['uses' => 'Users@store', 'as' => 'Login.users.store']);

	Route::get('signup/success', ['uses' => 'Users@success', 'as' => 'Login.users.success']);
	Route::get('signup/confirm/{token}', ['uses' => 'Users@confirm', 'as' => 'Login.users.confirm']);
});
