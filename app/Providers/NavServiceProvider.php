<?php

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavServiceProvider extends ServiceProvider
{
    private $pageListLocation = 'pages/pageList.json';
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
            if(Storage::exists($this->pageListLocation)) {
                // TODO: Load page list
                $pages = collect(json_decode(Storage::get($this->pageListLocation), true));
            } else {
                $pages = collect();
            }
            $view->with(compact('pages'));
        });
    }
}
