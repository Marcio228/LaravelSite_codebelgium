<?php

namespace App\Listeners;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//to get request via dependency injection -> got in construct
use Illuminate\Http\Request;

class LogPasswordReset
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
     * @param  PasswordReset  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        //
        $properties = array_merge($this->request->all(), ['user_ip' => $this->request->ip()]);
        $user = $event->user;

        activity('Auth')
        ->performedOn($user)
        ->causedBy($user)
        ->withProperties($properties)
        ->log("User Reset Password");
    }
}
