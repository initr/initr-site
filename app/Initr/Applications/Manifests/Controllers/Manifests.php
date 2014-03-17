<?php namespace Initr\Applications\Manifests\Controllers;

use Initr\Applications\Manifests\Repositories\Manifest;

class Manifests extends \BaseController
{
	public function __construct(Manifest $manifest)
	{
		$this->manifest = $manifest;
		$this->beforeFilter('Manifests.auth', ['only' => ['create', 'store', 'update', 'destroy']]);
	}

	public $layout = 'Manifests::_layout';

	public function create()
	{
		$manifest = $this->manifest->newInstance();

		$this->layout->nest('content', 'Manifests::manifests.create', compact('manifest'));
	}
}
