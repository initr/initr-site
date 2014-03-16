<?php namespace Initr\Applications\Login\Controllers;

// use Initr\Applications\Login\Repositories\User;
use Initr\Applications\Login\Validators\User as Validator;

class Users extends \BaseController
{
	public $layout = 'Login::_layout';

	protected $user;
	protected $validator;

	public function __construct(Validator $validator)
	{
		$this->user = $user;
		$this->validator = $validator;
	}

	public function create()
	{
		$user = $this->user->newInstance();

		$this->layout->nest('content', 'Login::users.create');
	}
}
