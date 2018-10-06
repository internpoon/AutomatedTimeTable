<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use AutomatedTimeTable\Subject;
use AutomatedTimeTable\Session;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $time = array(
          1 => "08:00:00",
          2 => "10:00:00",
          3 => "11:00:00",
          4 => "14:00:00",
          5 => "15:00:00",
          6 => "16:00:00",
        );
        $day = array(
            1 => "Monday",
            2 => "Tuesday",
            3 => "Wednesday",
            4 => "Thursday",
            5 => "Friday",
        );
        $type = array(
            1 => "Lecture",
            2 => "Practical",
        );
        $venue = "Class A";
        $lecturer = "Sir A";

        $subjects = Subject::all();
        foreach ($subjects as $subject) {
            for($i = 0; $i < $subject->total_session; $i++) {
                $session = new Session();
                $i == 0 || $i == 1 ? $session->type = "Lecture" : $session->type = "Practical";
                $session->id = $subject->id . substr($session->type, 0, 1) . ($i+1);
                $session->venue = $venue;
                $session->day = $day[rand(1,5)];
                $session->lecturer = $lecturer;
                $session->subject_id = $subject->id;
                $session->start_time = $time[rand(1,5)];
                $session->end_time = date('H:i:s',strtotime($session->start_time) + 60*60*2);
                $session->save();
            }
        }

    }
}
