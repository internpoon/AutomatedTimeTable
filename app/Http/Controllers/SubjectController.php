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
        $session = Session::where('subject_id', $id)->get();
        return $session;
    }
}
