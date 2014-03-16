<?php

$controllerNamespace = 'Initr\\Applications\\Login\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'as' => 'Login'], function() {
	Route::get('signup', ['uses' => 'Users@create', 'as' => 'users.create']);
});
