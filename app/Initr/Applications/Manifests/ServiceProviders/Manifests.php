<?php namespace Initr\Applications\Manifests\ServiceProviders;

class Manifests extends \Rtablada\AppToolkit\ApplicationBaseServiceProvider
{
	protected $filters = true;
	protected $routes = true;
	protected $viewNamespace = 'Manifests';
	protected $fileLocation = __DIR__;
}
