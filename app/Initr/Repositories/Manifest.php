<?php namespace Initr\Repositories;

use Initr\Models\Manifest as ManifestModel;

class Manifest
{
	protected $manifest;

	public function __construct(ManifestModel $manifest)
	{
		$this->manifest = $manifest;
	}

	public function findVersionWithName($manifestName, $versionName)
	{
		$manifest = $this->manifest->where('name', $manifestName)->first();

		return $manifest->versions()->where('version_name', $versionName)->first();
	}
}
