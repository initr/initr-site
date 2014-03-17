<?php namespace Initr\Repositories;

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

	public function findByName($name)
	{
		return $this->manifest->where('name', $name)->first();
	}

	public function updateVersions($name)
	{
		$manifest = $this->findByName($name);

		$versions = $this->broker->getVersionsAndTags($manifest->repository_url, $manifest);

		$this->manifestVersion->updateForManifestWithVersionInfo($manifest, $versions);
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
