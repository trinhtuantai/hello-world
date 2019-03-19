<?php 

namespace Taitt\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
	public function register()
	{
	    $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
	    $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'taitt-hello-world');
	}
}