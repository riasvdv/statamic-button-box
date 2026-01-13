<?php

namespace Rias\ButtonBox;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        ButtonBox::class,
    ];

    protected $vite = [
        'input' => [
            'resources/js/button-box.js',
        ],
        'publicDirectory' => 'dist',
        'hotFile' => __DIR__.'/../dist/hot',
    ];

    public function boot()
    {
        parent::boot();

        $this->publishes([__DIR__.'/../config/button-box.php' => config_path('statamic/button-box.php')]);
        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/statamic-button-box'),
        ], 'statamic-button-box');

        $this->mergeConfigFrom(__DIR__.'/../config/button-box.php', 'statamic.button-box');
    }
}
