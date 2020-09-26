<?php

namespace Araby\KeySwap\Laravel;

use Araby\KeySwap\KeySwap;
use Illuminate\Support\ServiceProvider;

class KeySwapServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->singleton('key-swap', function ($app) {
            return new KeySwap();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return ['key-swap'];
    }
}
