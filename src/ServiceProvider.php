<?php

namespace Rias\ButtonBox;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        ButtonBox::class,
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/button-box.js',
    ];

    protected $stylesheets = [
        __DIR__.'/../dist/css/button-box.css',
    ];

    protected $externalScripts = [
        'https://kit.fontawesome.com/717c607586.js',
    ];

    public function boot()
    {
        $this->publishes([__DIR__.'/../config/button-box.php' => config_path('statamic/button-box.php')]);
        $this->mergeConfigFrom(__DIR__.'/../config/button-box.php', 'statamic.button-box');
    }
}
