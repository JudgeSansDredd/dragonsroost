<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('templates.navbar.main', function ( \Illuminate\View\View $view) {
            $pages = [
                [
                      'name' => 'Home'
                    , 'route' => 'welcome'
                ], [
                      'name' => 'Glossary'
                    , 'route' => 'glossary'
                ]
            ];
            $view->with(compact('pages'));
        });
    }
}
