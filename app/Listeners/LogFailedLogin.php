<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Failed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//to get request via dependency injection -> got in construct
use Illuminate\Http\Request;

class LogFailedLogin
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
     * @param  Failed  $event
     * @return void
     */
    public function handle(Failed $event)
    {
        //
        $properties = array_merge($this->request->all(), ['user_ip' => $this->request->ip()]);
        if($user = $event->user)
        {
            activity('Auth')
            ->performedOn($user)
            ->causedBy($user)
            ->withProperties($properties)
            ->log("User Failed Login");
        }
        else
        {
            activity('Auth')
            ->withProperties($properties)
            ->log("User Failed Login");
        }
        
    }
}
