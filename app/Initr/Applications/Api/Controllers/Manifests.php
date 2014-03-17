<?php namespace Initr\Applications\Api\Controllers;

use Illuminate\Routing\Controller;
use Initr\Repositories\Manifest;

class Manifests extends Controller
{
	public function __construct(Manifest $manifest)
	{
		$this->manifest = $manifest;
	}

	public function info($name, $version)
	{
		$version = $this->manifest->findVersionWithName($name, $version);

		return $version;
	}
}
