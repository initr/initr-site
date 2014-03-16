<?php namespace Initr\Applications\Login\Validators;

use Initr\Services\Validator;

class User extends Validator
{
	protected $createRules = [
		'email'    => 'required|email',
		'username' => 'required',
		'password' => 'required|confirmed',
	];
}
