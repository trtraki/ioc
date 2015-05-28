<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Testinterface;
use App\Services\Test;

class TestServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Testinterface', function($app)
		{
			return new Test($app['Test']);
		});
	}
}
