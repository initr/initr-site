<?php namespace Initr\Applications\Brochure\Controllers;

class Home extends \BaseController
{
	public $layout = 'Brochure::_layout';

	public function index()
	{
		$this->layout->nest('content', 'Brochure::home.index');
	}
}
