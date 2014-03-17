<?php

$controllerNamespace = 'Initr\\Applications\\Api\\Controllers';

Route::group(['namespace' => $controllerNamespace, 'prefix' => 'api'], function() {
	Route::get('manifests/{name}/{version}', ['uses' => 'Manifests@info', 'as' => 'API.manifests.info']);
});
