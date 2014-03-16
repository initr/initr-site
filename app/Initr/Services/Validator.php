<?php namespace Initr\Services;

use Illuminate\Validation\Factory as LaravelValidator;

abstract class Validator
{
	protected $validator;

	protected $data = array();

	protected $errors = array();

	protected $rules = array();

	protected $messages = array();

	public function __construct(LaravelValidator $validator)
	{
		$this->validator = $validator;
	}

	public function with(array $data)
	{
		$this->data = $data;

		return $this;
	}

	public function validate($data, $rules)
	{
		$validator = $this->validator->make(
			$data,
			$rules,
			$this->messages
		);

		if ($validator->fails()) {
			$this->errors = $validator->messages();

			return false;
		}

		return true;
	}

	public function passes()
	{
		return $this->validate(
			$this->data,
			$this->rules
		);
	}

	public function errors()
	{
		return $this->errors;
	}

	public function __call($method, $parameters)
	{
		$matches = array();

		if (preg_match('/validate(.*)/', $method, $matches)) {
			$rulesName = camel_case($matches[1]) . 'Rules';
			$rules = $this->{$rulesName};

			return $this->validate($parameters[0], $rules);
		}
	}
}
