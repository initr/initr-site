<?php

function app_path($file = null) {
	return __DIR__.'/../app' . $file;
}

$uri = $_SERVER["REQUEST_URI"];
$uri = $uri == '/' ? 'index' : $uri;
$filepath = app_path('/views/'.$uri.'.php');

if (file_exists($filepath)) {
	require $filepath;
} else {
	require app_path('/views/404.php');
}

$content = ob_get_clean();

include app_path('/views/_layout.php');
