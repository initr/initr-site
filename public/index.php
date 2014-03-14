<?php

$uri = $_SERVER["REQUEST_URI"];
$uri = $uri == '/' ? 'index' : $uri;
$filepath = __DIR__.'/../app/views/'.$uri.'.php';

if (file_exists($filepath)) {
	require($filepath);
}
