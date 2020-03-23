<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//to get request via dependency injection -> got in construct
use Illuminate\Http\Request;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //
        $user = $event->user;
        $user->last_login_at = now()->toDateTimeString();
        $user->last_login_ip = $this->request->ip();
        $user->save();

        $properties = array_merge($this->request->all(), ['user_ip' => $this->request->ip()]);

        activity('Auth')
        ->performedOn($user)
        ->causedBy($user)
        ->withProperties($properties)
        ->log("User Successful Login");
    }
}
