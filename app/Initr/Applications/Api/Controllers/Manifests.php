<?php namespace Initr\Applications\Api\Controllers;

use Illuminate\Routing\Controller;
use Initr\Repositories\Manifest;
use Input;

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

	public function requireScripts()
	{
		$input = Input::all();
		$reqs = $input['require'];
		$compiledScripts = [];

		foreach ($reqs as $name => $version) {
			$version = $this->manifest->findVersionWithName($name, $version);

			$compiledScripts = array_merge($compiledScripts, $version->compiled_scripts);
		}

		$input['require_scripts'] = $compiledScripts;

		return $input;
	}
}
