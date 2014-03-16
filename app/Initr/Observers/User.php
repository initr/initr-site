<?php namespace Initr\Observers;

use Initr\Services\UserConfirmer;

class User
{
	protected $confirmer;

	public function __construct(UserConfirmer $confirmer)
	{
		$this->confirmer = $confirmer;
	}

	public function creating($user)
	{
		$user->confirmation_code = str_random(40);
		$this->confirmer->sendConfirm($user);
	}
}
