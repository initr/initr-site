<?php

$controllerNamespace = 'Initr\\Applications\\Login\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'as' => 'Login'], function() {
	Route::get('signup', ['uses' => 'Users@create', 'as' => 'users.create']);
	Route::post('signup', ['uses' => 'Users@store', 'as' => 'users.store']);
});
