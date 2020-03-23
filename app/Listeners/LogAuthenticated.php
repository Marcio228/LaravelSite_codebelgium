<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//to get request via dependency injection -> got in construct
use Illuminate\Http\Request;

class LogAuthenticated
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
     * @param  Authenticated  $event
     * @return void
     */
    public function handle(Authenticated $event)
    {
        //
        $user = $event->user;
        $properties = array_merge($this->request->all(), ['user_ip' => $this->request->ip()]);
        activity('Auth')
        ->performedOn($user)
        ->causedBy($user)
        ->withProperties($properties)
        ->log("User Authenticated");
    }
}
