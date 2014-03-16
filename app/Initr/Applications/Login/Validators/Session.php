<?php namespace Initr\Applications\Login\Validators;

use Initr\Services\Validator;

class Session extends Validator
{
	protected $createRules = [
		'username' => 'required',
		'password' => 'required',
	];
}
