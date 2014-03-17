<?php namespace Initr\Applications\Manifests\Repositories;

use Initr\Models\ManifestVersion as ManifestVersionModel;
use Initr\Services\Brokers\ManifestVersion as ManifestVersionBroker;
use Initr\Applications\Manifests\Validators\Manifest as Validator;

class ManifestVersion
{
	protected $manifestVersion;
	protected $broker;
	protected $validator;

	public function __construct(ManifestVersionModel $manifestVersion, ManifestVersionBroker $broker)
	{
		$this->manifestVersion = $manifestVersion;
		$this->broker = $broker;
	}

	public function newInstance(array $attributes = array())
	{
		return $this->manifest->newInstance($attributes);
	}

	public function updateForManifestWithVersionInfo($manifest, $versions)
	{
		$this->updateWithTags($manifest, $versions['tags']);
	}

	public function updateWithTags($manifest, $tags)
	{
		foreach ($tags as $tag) {
			$attributes = [
				'manifest_id' => $manifest->id,
				'version_name' => $tag->name,
			];
			$manifestVersion = $this->manifestVersion->firstOrNew($attributes);

			if ($manifestVersion->commit_hash !== $tag->commit->sha) {
				$manifestVersion->base_url = $this->broker->getVersionBaseUrl($manifest, $attributes['version_name']);
				$manifestVersion->json_file = $this->broker->getJsonFileForManifestVersion($manifestVersion);
				$manifestVersion->commit_hash = $tag->commit->sha;

				$manifestVersion->save();
			}

		}
	}

	public function setValidator($validator)
	{
		$this->validator = $validator;
	}
}
