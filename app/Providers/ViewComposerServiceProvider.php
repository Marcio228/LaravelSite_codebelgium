<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Add data to header
        View::composer(
            ['backend.partials.admin.header'], 'App\Http\ViewComposers\Header'   
        );

        // Add company info to menu
        // View::composer(
        //     ['backend.partials.admin.menu'], 'App\Http\ViewComposers\Menu'
        // );

        // Add limits to index
        // View::composer(
        //     '*.index', 'App\Http\ViewComposers\Index'
        // );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
