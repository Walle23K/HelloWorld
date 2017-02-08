<?php

namespace HelloWorld\Providers;

public function register()
        {
            $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
        }

use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {

    }
}
