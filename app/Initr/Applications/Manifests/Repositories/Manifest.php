<?php namespace Initr\Applications\Manifests\Repositories;

use Initr\Models\Manifest as ManifestModel;

class Manifest
{
	protected $manifest;

	public function __construct(ManifestModel $manifest)
	{
		$this->manifest = $manifest;
	}

	public function newInstance(array $attributes = array())
	{
		return $this->manifest->newInstance($attributes);
	}
}
