<?php

namespace Qbhy\XFYun;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class LaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->setupConfig();

        $this->app->singleton(App::class, function () {
            return new App(config('xfyun'));
        });
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $configSource = dirname(__DIR__) . '/config/xfyun.php';
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $configSource => config_path('xfyun.php')
            ]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('xfyun');
        }
        $this->mergeConfigFrom($configSource, 'xfyun');

    }
}