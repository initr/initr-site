<?php

$layout = View::make('_layout');

Route::get('example', function() use ($layout)
{
	$layout->nest('content', 'example');

	return $layout;
});

App::missing(function($e) use ($layout)
{
	$layout->nest('content', '404');

	return $layout;
});
