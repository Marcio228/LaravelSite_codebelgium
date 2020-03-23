<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//to get request via dependency injection -> got in construct
use Illuminate\Http\Request;

class LogVerifiedUser
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
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        //
        $user = $event->user;
        $properties = array_merge($this->request->all(), ['user_ip' => $this->request->ip()]);

        activity('Auth')
        ->performedOn($user)
        ->causedBy($user)
        ->withProperties($properties)
        ->log("User Email Verified");
    }
}
