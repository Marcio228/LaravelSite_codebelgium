<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class Header
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = Auth::user();

        $view->with([
            'user' => $user,
        ]);
    }
}
