<?php namespace Initr\Applications\Manifests\Validators;

use Initr\Services\Validator;

class Manifest extends Validator
{
	protected $submitRules = [
		'repository_url' => 'required|url',
	];

	protected $createRules = [
		'repository_url' => 'required|url|confirmed',
		'name' => 'required|unique:manifests',
		'user_id' => 'required',
	];
}
