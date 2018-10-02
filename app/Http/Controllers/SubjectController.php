<?php

namespace AutomatedTimeTable\Http\Controllers;

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
}
