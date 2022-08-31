<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Navbar data
        View::composer('layouts.header', function ($view) {
            $navitems = \App\Models\Navitem::all();
            $view->with('dropdown_menu', $navitems->where('dropdown-menu', true)->first());
            $view->with('dropdown_items', $navitems->where('dropdown-item', true)->sortBy('order'));
            $view->with('nav_lg', $navitems->where('lg', true)->sortBy('order'));
            $view->with('nav_sm', $navitems->where('sm', true)->sortBy('order'));

        });
    }
}
