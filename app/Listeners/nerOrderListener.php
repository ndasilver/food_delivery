<?php

namespace App\Listeners;

use App\Events\newOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class nerOrderListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  newOrderEvent  $event
     * @return void
     */
    public function handle(newOrderEvent $event)
    {
        //
    }
}
