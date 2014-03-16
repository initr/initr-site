<?php namespace Initr\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class ApplicationServiceProvider extends ServiceProvider
{

	/**
	 * The provider class names.
	 *
	 * @var array
	 */
	protected $providers = array(
		'Initr\ServiceProviders\Observers',
	);

	/**
	 * An array of the service provider instances.
	 *
	 * @var array
	 */
	protected $instances = array();

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->instances = array();

		foreach ($this->providers as $provider)
		{
			$this->instances[] = $this->app->register($provider);
		}
	}

	public function register()
	{
		return null;
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		$provides = array();

		foreach ($this->providers as $provider)
		{
			$instance = $this->app->resolveProviderClass($provider);

			$provides = array_merge($provides, $instance->provides());
		}

		return $provides;
	}

}
