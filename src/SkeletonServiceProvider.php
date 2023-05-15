<?php

namespace VendorName\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/rapidez-:package_slug_without_prefix.php', 'rapidez-:package_slug_without_prefix');
    }

    public function boot()
    {
        $this
            ->bootRoutes()
            ->bootViews()
            ->bootPublishables()
            ->bootComposers();
    }

    public function bootRoutes() : self
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        return $this;
    }

    public function bootViews() : self
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rapidez-:package_slug_without_prefix');

        return $this;
    }

    public function bootPublishables() : self
    {
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/rapidez-:package_slug_without_prefix'),
        ], ':package_slug-views');

        $this->publishes([
            __DIR__.'/../config/rapidez-:package_slug_without_prefix.php' => config_path('rapidez-:package_slug_without_prefix.php'),
        ], ':package_slug-config');

        return $this;
    }
}
