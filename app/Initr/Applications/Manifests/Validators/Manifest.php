<?php namespace Initr\Applications\Manifests\Validators;

use Initr\Services\Validator;

class Manifest extends Validator
{
	protected $createRules = [
		'repository_url' => 'required|url',
	];
}
