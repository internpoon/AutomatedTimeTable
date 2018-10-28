<?php

namespace AutomatedTimeTable\Http\Controllers;

use AutomatedTimeTable\Session;
use AutomatedTimeTable\StudentProfile;
use Illuminate\Http\Request;
use AutomatedTimeTable\Subject;

class SubjectController extends Controller
{
    public function view()
    {
        $subjects = Subject::all();
        return view('student.subjects.subjectsList', compact('subjects'));
    }

    public function subjectDetail($id)
    {
        $subject = Subject::where('id', $id)->first();

        return view('student.subjects.subjectDetail', compact('subject'));
    }

    public function subjectEnroll()
    {
        $subjects = Subject::all();
        $sessions = Session::all();

        return view('student.subjects.subjectEnroll', compact('subjects', 'sessions'));
    }

    public function subjects()
    {
        $subjects = Subject::all();
        return $subjects;
    }

    public function getSession($id)
    {
        $response = collect();

        $sessions = Session::where('subject_id', $id)->get();

        foreach($sessions as $session) {
            $data = collect();
            $data->put('session_id', $session->id);
            $data->put('start_time', $session->start_time);
            $data->put('end_time', $session->end_time);
            $data->put('day', $session->day);
            $data->put('type', $session->type);
            $data->put('subject_name', $session->subject->name);
            $data->put('subject_id', $id);
            $data->put('duration', (strtotime($session->end_time) - strtotime($session->start_time))/120/30);

            $response->push($data);
        }

        return $response;
    }

    public function enroll(Request $request) {
        $user = \Auth::user();
        $student = StudentProfile::where('user_id', $user->id)->first();
        $enrolledSubjects = [];
        $enrolledSessions = [];

        foreach($request->all() as $data) {
            array_push($enrolledSessions, $data['session_id']);

            if(!in_array($data['subject_id'], $enrolledSubjects))
                array_push($enrolledSubjects, $data['subject_id']);
        }

        $student->enrolled_subs = json_encode($enrolledSubjects);
        $student->enrolled_sessions = json_encode($enrolledSessions);
        $student->save();

        return response()->json($student);
    }

    public function autoEnroll(Request $request) {
        $user = \Auth::user();
        $student = StudentProfile::where('user_id', $user->id)->first();
        $enrolledSubjects = [];

        $subjectSessions = collect();
        $selectedSessions = collect();
        $found = false;

        foreach($request->all() as $subject) {
            if(!in_array($subject['id'], $enrolledSubjects))
                array_push($enrolledSubjects, $subject['id']);

            $session = Session::where('subject_id', $subject['id'])->get();

            foreach($session as $data) {
                if ($data->type == "Practical") {
                    $selectedSessions->push($data);
                }
            }
            $session = $session->reject(function($data) {
                return $data->type == "Practical";
            });

            $subjectSessions->put($subject['id'], $session);
        }

        $student->enrolled_subs = json_encode($enrolledSubjects);
        $student->save();

//        $time = time();
//        $lowestClashes = null;
//        $best = null;

        while(!$found) {
            $tempSelected = $selectedSessions;
            $clashes = 0;

            foreach($subjectSessions as $subject) {
                $tempSelected->push($subject->random());
            }

            for($i = 0; $i < $tempSelected->count(); $i++) {
                for($j = 0; $j < $tempSelected->count(); $j++) {
                    if ($tempSelected[$i]['day'] == $tempSelected[$j]['day']) {
                        if (strtotime($tempSelected[$j]['start_time']) < strtotime($tempSelected[$i]['start_time']) &&
                            strtotime($tempSelected[$i]['start_time']) < strtotime($tempSelected[$j]['end_time']) ||
                            strtotime($tempSelected[$i]['start_time']) < strtotime($tempSelected[$j]['start_time']) &&
                            strtotime($tempSelected[$j]['start_time']) < strtotime($tempSelected[$i]['end_time'])
                        ) {
                            $clashes++;
                        }
                    }
                }
            }

//            if ($lowestClashes == null) {
//                $lowestClashes = $clashes;
//                $best = $tempSelected;
//            } elseif ($clashes < $lowestClashes) {
//                $lowestClashes = $clashes;
//                $best = $tempSelected;
//            }
//
//            if (time() > $time + 30) {
//                $found = true;
//                $selectedSessions = $best;
//            }

            if ($clashes == 0) {
                $found = true;
                $selectedSessions = $tempSelected;
            }
        }
        $enrolledSessions = [];

        foreach($selectedSessions as $session) {
            array_push($enrolledSessions, $session->id);
        }

        $student->enrolled_sessions = json_encode($enrolledSessions);
        $student->save();

        return response()->json($enrolledSessions);
    }
}
