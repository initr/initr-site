<?php

$controllerNamespace = 'Initr\\Applications\\Manifests\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'prefix' => 'manifests'], function()
{
	Route::get('submit', ['uses' => 'Manifests@create', 'as' => 'Manifests.manifests.create']);
	Route::post('/', ['uses' => 'Manifests@store', 'as' => 'Manifests.manifests.store']);

	Route::get('{name}', ['uses' => 'Manifests@show', 'as' => 'Manifests.manifests.show']);
	Route::get('{name}/update', ['uses' => 'Manifests@update', 'as' => 'Manifests.manifests.update']);
});
