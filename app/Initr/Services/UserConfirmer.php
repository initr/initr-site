<?php namespace Initr\Services;

use Illuminate\Mail\Mailer;
use Initr\Models\User;
use Illuminate\Auth\UserProviderInterface;

class UserConfirmer
{
	protected $mailer;

	protected $user;

	protected $confirmationView = 'App::emails.auth.confirmation';

	public function __construct(User $user, Mailer $mailer)
	{
		$this->user = $user;
		$this->mailer = $mailer;
	}

	public function sendConfirm($user)
	{
		// We will use the reminder view that was given to the broker to display the
		// password reminder e-mail. We'll pass a "token" variable into the views
		// so that it may be displayed for an user to click for password reset.
		$view = $this->getConfirmationView();
		$token = $user->getConfirmationToken();

		return $this->mailer->send($view, compact('token', 'user'), function($m) use ($user, $token)
		{
			$m->subject('Welcome to inir.io');
			$m->to($user->getConfirmationEmail());
		});
	}

	public function getConfirmationView()
	{
		return $this->confirmationView;
	}

	public function confirmUser($token)
	{
		$user = $this->user->where('confirmation_code', $token)->first();

		if ($user) {
			$user->confirmed = true;
			// $user->confirmation_code = null;
			$user->save();

			return true;
		} else {
			return null;
		}
	}
}
