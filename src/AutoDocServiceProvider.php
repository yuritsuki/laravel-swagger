<?php

namespace Yuritsuki\Support\AutoDoc;

use Illuminate\Support\ServiceProvider;
use Yuritsuki\Support\AutoDoc\Commands\PushDocumentationCommand;

class AutoDocServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/auto-doc.php', 'auto-doc');

        $this->publishes([
            __DIR__ . '/../config/auto-doc.php' => config_path('auto-doc.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views/swagger-description.blade.php' => resource_path('views/swagger-description.blade.php'),
        ], 'view');

        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }

        $this->commands([
            PushDocumentationCommand::class
        ]);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'auto-doc');
    }

    public function register()
    {
    }
}
