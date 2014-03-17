<?php namespace Initr\Services\Brokers;

use Guzzle\Http\Client;

class ManifestVersion
{
	protected $errors = array();

	public function __construct(Client $guzzle)
	{
		$this->guzzle = $guzzle;
	}

	public function getJsonFileForManifestVersion($manifestVersion)
	{
		$jsonUrl = trim($manifestVersion->raw_base_url, '/') . '/initr.json';
		$response = $this->guzzle->get($jsonUrl)->send();
		$file = $response->getBody(true);

		return json_decode($file);
	}

	public function getVersionBaseUrl($manifest, $name)
	{
		return $manifest->repository_url . '/tree/' . $name;
	}
}
