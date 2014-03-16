<?php namespace Initr\Applications\Login\Controllers;

use Initr\Applications\Login\Validators\Session as Validator;
use Input, Redirect, Auth;
use Session as SessionStore;

class Session extends \BaseController
{
	public $layout = 'Login::_layout';

	protected $validator;

	public function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	public function create()
	{
		$this->layout->nest('content', 'Login::session.create');
	}

	public function store()
	{
		$input = Input::only('username', 'password');
		$input['confirmed'] = true;

		if ($this->validator->validateCreate($input) && Auth::attempt($input)) {
			SessionStore::flash('success', 'You have logged in.');

			return Redirect::route('Login.session.create');
		}
		SessionStore::flash('danger', 'There was an error logging in.');

		return Redirect::back()
			->withInput()
			->withErrors($this->validator->errors());
	}

	public function destroy()
	{
		Auth::logout();
		SessionStore::flash('success', 'You have logged out');

		return Redirect::route('Login.session.create');
	}
}
