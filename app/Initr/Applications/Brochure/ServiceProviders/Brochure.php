<?php namespace Initr\Applications\Brochure\ServiceProviders;

class Brochure extends \Rtablada\AppToolkit\ApplicationBaseServiceProvider
{
	protected $filters = false;
	protected $routes = true;
	protected $viewNamespace = 'Brochure';
	protected $fileLocation = __DIR__;
}
