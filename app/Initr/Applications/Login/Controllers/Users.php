<?php namespace Initr\Applications\Login\Controllers;

use Initr\Applications\Login\Repositories\User;
use Initr\Applications\Login\Validators\User as Validator;
use Input, Redirect;

class Users extends \BaseController
{
	public $layout = 'Login::_layout';

	protected $user;
	protected $validator;

	public function __construct(User $user, Validator $validator)
	{
		$this->user = $user;
		$this->validator = $validator;
	}

	public function create()
	{
		$user = $this->user->newInstance();

		$this->layout->nest('content', 'Login::users.create', compact('user'));
	}

	public function store()
	{
		$input = Input::only('email', 'username', 'password', 'password_confirmation');

		if ($this->validator->validateCreate($input)) {
			$this->user->store($input);

			return Redirect::route('Login.users.success');
		} else {
			return Redirect::back()
				->withInput()
				->withErrors($this->validator->errors());
		}
	}

	public function success()
	{
		$this->layout->nest('content', 'Login::users.success');
	}
}
