<?php

Route::filter('Manifests.auth', function()
{
	if (Auth::guest()) {
		Session::flash('danger', 'You must log in first.');

		return Redirect::guest(route('Login.session.create'));
	}
});
