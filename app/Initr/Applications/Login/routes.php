<?php

$controllerNamespace = 'Initr\\Applications\\Login\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'as' => 'Login'], function() {

	Route::get('signup', ['uses' => 'Users@create', 'as' => 'users.create']);
	Route::post('signup', ['uses' => 'Users@store', 'as' => 'users.store']);

	Route::get('signup/success', ['uses' => 'Users@success', 'as' => 'users.success']);
	Route::get('signup/confirm/{token}', ['uses' => 'Users@confirm', 'as' => 'users.confirm']);
});
