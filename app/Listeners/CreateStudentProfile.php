<?php

namespace AutomatedTimeTable\Listeners;

use AutomatedTimeTable\Events\Event;
use AutomatedTimeTable\StudentProfile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateStudentProfile
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
     * @param  Event  $event
     * @return void
     */
    public function handle(Event $event)
    {
        $studentProfile = new StudentProfile();
        $event->user->profiles()->save($studentProfile);
    }
}
