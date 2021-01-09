<?php

namespace Foostart\Company;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;
use URL,
    Route;
use Illuminate\Http\Request;

class CompanyServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {

        //generate context key
//        $this->generateContextKey();

        // load view
        $this->loadViewsFrom(__DIR__ . '/Views', 'package-company');

        // include view composers
        require __DIR__ . "/composers.php";

        // publish config
        $this->publishConfig();

        // publish lang
        $this->publishLang();

        // publish views
        //$this->publishViews();

        // publish assets
        $this->publishAssets();

        // publish migration
        $this->publishMigrations();

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';
    }

    /**
     * Public config to system
     * @source: vendor/foostart/package-company/config
     * @destination: config/
     */
    protected function publishConfig() {
        $this->publishes([
            __DIR__ . '/config/package-company.php' => config_path('package-company.php'),
                ], 'config');
    }

    /**
     * Public language to system
     * @source: vendor/foostart/package-company/lang
     * @destination: resources/lang
     */
    protected function publishLang() {
        $this->publishes([
            __DIR__ . '/lang' => base_path('resources/lang'),
        ]);
    }

    /**
     * Public view to system
     * @source: vendor/foostart/package-company/Views
     * @destination: resources/views/vendor/package-company
     */
    protected function publishViews() {

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/views/vendor/package-company'),
        ]);
    }

    protected function publishAssets() {
        $this->publishes([
            __DIR__ . '/public' => public_path('packages/foostart/package-company'),
        ]);
    }

    protected function publishMigrations()
    {

        $this->publishes([
                                 __DIR__ . '/database/migrations' => $this->app->databasePath() . '/migrations',
                         ]);
    }

}