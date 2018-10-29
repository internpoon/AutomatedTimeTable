<?php

namespace AutomatedTimeTable\Http\Controllers;

use AutomatedTimeTable\Subject;
use Illuminate\Http\Request;
use AutomatedTimeTable\StudentProfile;

class StudentProfileController extends Controller
{
    public function view()
    {
        $user = \Auth::user();
        $enrolledSubs = json_decode($user->profile->enrolled_subs);

        $subjects = Subject::all()->filter(function($value) use ($enrolledSubs) {
            foreach ($enrolledSubs as $enrolledSub) {
                if ($value->id == $enrolledSub) {
                    return $value;
                }
            }
        });

        return view('student.profile', compact('user', 'subjects'));
    }
}
