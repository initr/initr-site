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
		$response = $this->guzzle->get($jsonUrl)->send();
		$file = $response->getBody(true);

		return json_decode($file);
	}
}
