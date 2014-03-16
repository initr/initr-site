<?php namespace Initr\Applications\Login\Controllers;

use Initr\Applications\Login\Repositories\User;
use Initr\Services\UserConfirmer;
use Initr\Applications\Login\Validators\User as Validator;
use Input, Redirect, Session;

class Users extends \BaseController
{
	public $layout = 'Login::_layout';

	protected $user;
	protected $validator;
	protected $confirmer;

	public function __construct(User $user, Validator $validator, UserConfirmer $confirmer)
	{
		$this->user = $user;
		$this->validator = $validator;
		$this->confirmer = $confirmer;
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

	public function confirm($token)
	{
		if ($this->confirmer->confirmUser($token)) {
			Session::flash('success', 'Your user has been activated. Login now.');

			return Redirect::route('Login.session.create');
		} else {
			$this->layout->nest('content', 'Login::users.confirm-fail');
		}
	}
}
