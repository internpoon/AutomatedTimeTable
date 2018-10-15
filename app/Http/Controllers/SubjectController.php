<?php

namespace AutomatedTimeTable\Http\Controllers;

use AutomatedTimeTable\Session;
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

            $response->push($data);
        }

        return $response;
    }
}
