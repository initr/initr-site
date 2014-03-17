<?php

$controllerNamespace = 'Initr\\Applications\\Api\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'prefix' => 'api'], function() {
	Route::get('manifests', ['uses' => 'Manifests@index', 'as' => 'API.manifests.index']);
	Route::get('manifests/{name}/{version}', ['uses' => 'Manifests@info', 'as' => 'API.manifests.info']);
	Route::post('require', ['uses' => 'Manifests@requireScripts', 'as' => 'API.manifests.requireScripts']);
});
