<?php namespace Initr\Applications\Login\ServiceProviders;

class Login extends \Rtablada\AppToolkit\ApplicationBaseServiceProvider
{
	protected $filters = false;
	protected $routes = true;
	protected $viewNamespace = 'Login';
	protected $fileLocation = __DIR__;
}
