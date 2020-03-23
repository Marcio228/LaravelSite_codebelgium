<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('FrontHeaderMenuLeft', function ($menu) {   
            $menu->add('Home', ['url'  => '']);
            $menu->add('About', ['url'  => 'about']);
            $menu->add('Courses', ['url'  => "courses", 'class' => "menu-has-children"]);
            $menu->courses->add('Fullstack Software Engineering Bootcamp', ['url'  => 'courses/coding']);
            $menu->courses->add('Remote Software Engineering Program', ['url'  => 'courses/coding-remote']);
            $menu->add('FAQ', ['url'  => 'faq']);
            $menu->add('Blogs', ['url'  => 'blog']);
            $menu->add('Contact Us', ['url'  => 'contact']);

        });

        \Menu::make('FrontHeaderMenuRight', function ($menu) {   
            // //If user Logged in
            // if(Auth::check())
            // {
            // //     $menu->add('Dashboard', ['url'  => 'user/dashboard']);
            //     $signout = $menu->add('Logout', ['route'  => 'logout']);
            // }
            // //If user not logged in
            // else
            // {
            //     $menu->add('Login', ['route'  => 'login']);

            // }
            $menu->add('Apply', ['url'  => 'apply']);

        });

        \Menu::make('AdminLeftSideMenu', function ($menu) {
            
            // //Header
            // $menu->add("MAIN NAVIGATION",[
            //     "class" => "nav-header",
            //     'raw' => true,
            // ]);

            //Dashboard
            if(Auth::check() && auth::User()->hasPermissionTo('read-dashboard'))
            {
                $menu->add('Dashboard' , ['icon'=>'flaticon-layers']);
                $menu->get('dashboard')->add('Dashboard' , ['url' => 'admin', 'icon'=>'flaticon-layers']);
            }
        });





        return $next($request);
    }
}
