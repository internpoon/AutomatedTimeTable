@extends('layouts.home')
@section('page_name', 'Student Profile')

@section('content')
    <p class="sProfile">Name: {{$user->name}}</p>
    <p class="sProfile">Email: {{$user->email}}</p>
    <p class="sProfile">Semester: {{$user->profile->semester}}</p>
    <p class="sProfile">Enrolled Subjects: @foreach($subjects as $subject) {{$subject->name . ", "}}  @endforeach</p>
@endsection


@section('custom_css')
    <style>
       .sProfile {
           font-family: "Arial", Helvetica, sans-serif;
           color: #000;
           font-weight: normal;
           font-size: 17px;

       }
    </style>
@endsection