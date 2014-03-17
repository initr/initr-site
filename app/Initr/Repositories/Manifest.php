<?php namespace Initr\Repositories;

use Initr\Models\Manifest as ManifestModel;

class Manifest
{
	protected $manifest;

	public function __construct(ManifestModel $manifest)
	{
		$this->manifest = $manifest;
	}

	public function searchNames($query)
	{
		$query = "%{$query}%";

		return $this->manifest->with('versions')->where('name', 'LIKE', $query)->paginate();
	}

	public function findVersionWithName($manifestName, $versionName)
	{
		$manifest = $this->manifest->where('name', $manifestName)->first();

		return $manifest->versions()->where('version_name', $versionName)->first();
	}
}
