<?php namespace Initr\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class Observers extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	protected $observableModels = array(
		'User',
		'ManifestVersion',
	);

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerObservers();
	}

	public function register()
	{

	}

	public function registerObservers()
	{
		foreach ($this->observableModels as $observableModel) {
			$model = $this->app->make('Initr\Models\\'.$observableModel);
			$observer = $this->app->make('Initr\Observers\\'.$observableModel);
			$model->observe($observer);
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
