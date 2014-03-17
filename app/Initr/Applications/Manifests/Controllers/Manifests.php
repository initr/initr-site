<?php namespace Initr\Applications\Manifests\Controllers;

use Initr\Applications\Manifests\Repositories\Manifest;
use Initr\Applications\Manifests\Validators\Manifest as Validator;
use Input, Redirect;

class Manifests extends \BaseController
{

	protected $manifest;

	protected $validator;

	public function __construct(Manifest $manifest, Validator $validator)
	{
		$this->manifest = $manifest;
		$this->validator = $validator;
		$this->beforeFilter('Manifests.auth', ['only' => ['create', 'store', 'update', 'destroy']]);
	}

	public $layout = 'Manifests::_layout';

	public function create()
	{
		$manifest = $this->manifest->newInstance();

		$this->layout->nest('content', 'Manifests::manifests.create', compact('manifest'));
	}

	public function store()
	{
		$input = Input::only('repository_url');

		if ($this->validator->validateCreate($input)) {
			dd($input);

			return Redirect::route('Login.users.success');
		} else {
			return Redirect::back()
				->withInput()
				->withErrors($this->validator->errors());
		}
	}
}
