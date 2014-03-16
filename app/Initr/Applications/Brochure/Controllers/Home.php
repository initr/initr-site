<?php namespace Initr\Applications\Brochure\Controllers;

class Home extends \BaseController
{
	public $layout = 'Brochure::_layout';

	public function index()
	{
		$this->layout->nest('content', 'Brochure::home.index');
		$this->layout->nest('scripts', 'Brochure::home._index-scripts');
	}

	public function example()
	{
		$this->layout->nest('stylesBefore', 'Brochure::home._example-styles');
		$this->layout->nest('content', 'Brochure::home.example');
	}
}
