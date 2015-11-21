<?php

namespace Chearaan\Advice;

use Illuminate\Support\ServiceProvider;

class AdviceServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('advice', function ($app) {
            return $this->app->make('Chearaan\Advice\Advicer');
        });
    }
}