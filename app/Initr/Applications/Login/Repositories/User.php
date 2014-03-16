<?php namespace Initr\Applications\Login\Repositories;

use Initr\Models\User as UserModel;

class User
{
	protected $user;

	public function __construct(UserModel $user)
	{
		$this->user = $user;
	}

	public function newInstance(array $attributes = array())
	{
		return $this->user->newInstance();
	}
}
