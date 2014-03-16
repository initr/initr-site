<?php namespace Initr\Applications\Login\Validators;

use Initr\Services\Validator;

class User extends Validator
{
	protected $createRules = [
		'email'    => 'required|email|unique:users',
		'username' => 'required|unique:users',
		'password' => 'required|confirmed',
	];
}
