<?php namespace Initr\Applications\Api\ServiceProviders;

class Api extends \Rtablada\AppToolkit\ApplicationBaseServiceProvider
{
	protected $filters = false;
	protected $routes = true;
	protected $viewNamespace = 'Api';
	protected $fileLocation = __DIR__;
}
