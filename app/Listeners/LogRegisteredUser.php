<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//to get request via dependency injection -> got in construct
use Illuminate\Http\Request;

class LogRegisteredUser
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
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        //
        $properties = array_merge($this->request->all(), ['user_ip' => $this->request->ip()]);
        $user = $event->user;

        activity('Auth')
        ->performedOn($user)
        ->causedBy($user)
        ->withProperties($properties)
        ->log("User Registered");
    }
}
