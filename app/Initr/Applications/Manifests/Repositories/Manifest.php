<?php namespace Initr\Applications\Manifests\Repositories;

use Initr\Models\Manifest as ManifestModel;
use Initr\Services\Brokers\Manifest as ManifestBroker;
use Initr\Applications\Manifests\Validators\Manifest as Validator;

class Manifest extends \Initr\Repositories\Manifest
{
	protected $manifest;
	protected $broker;
	protected $manifestVersion;
	protected $validator;

	public function __construct(ManifestModel $manifest, ManifestBroker $broker, ManifestVersion $manifestVersion)
	{
		$this->manifest = $manifest;
		$this->broker = $broker;
		$this->manifestVersion = $manifestVersion;
	}

	public function createFromUrlForUser($url, $user)
	{
		$json = $this->broker->getJSONFromBaseURL($url);

		$attributes = [
			'name' => $json->name,
			'repository_url' => $url,
			'repository_url_confirmation' => $json->repository,
			'user_id' => $user->id,
		];

		if ($this->validator->validateCreate($attributes)) {
			return $this->manifest->create($attributes);
		} else {
			return null;
		}
	}

	public function setValidator($validator)
	{
		$this->validator = $validator;
	}

	public function errors()
	{
		return $this->validator->errors();
	}
}
