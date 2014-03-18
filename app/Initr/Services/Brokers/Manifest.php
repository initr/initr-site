<?php namespace Initr\Services\Brokers;

use Guzzle\Http\Client;

class Manifest
{
	protected $errors = array();

	public function __construct(Client $guzzle)
	{
		$this->guzzle = $guzzle;
	}

	public function getJSONFromBaseUrl($url)
	{
		$rawBaseUrl = preg_replace('/(http:\/\/)|(https:\/\/)/', 'https://raw.', $url);
		$jsonUrl = trim($rawBaseUrl, '/') . '/master/initr.json';
		dd($jsonUrl);
		$response = $this->guzzle->get($jsonUrl)->send();
		$file = $response->getBody(true);

		return json_decode($file);
	}

	public function getVersionsAndTags($url)
	{
		$rawApiUrl = preg_replace('/(http:\/\/)|(https:\/\/)github.com/', 'https://api.github.com/repos', $url);
		$tags = $this->updateTags($rawApiUrl);
		$branches = $this->updateBranches($rawApiUrl);

		return compact('tags', 'branches');
	}

	protected function updateTags($rawBaseUrl)
	{
		$url = $rawBaseUrl . '/tags';
		$response = $this->guzzle->get($url)->send();

		return json_decode($response->getBody(true));
	}

	protected function updateBranches($rawBaseUrl)
	{
		$url = $rawBaseUrl . '/branches';
		$response = $this->guzzle->get($url)->send();

		return json_decode($response->getBody(true));
	}
}
