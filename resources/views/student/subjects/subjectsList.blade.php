@extends('layouts.home')

@section('content')
    @foreach($subjects as $subject)
        <ul class="list-unstyled" id="pageSubmenu">
           <li><a href="{{route('student.subjectDetails', ['id' => $subject->id])}}">{{$subject->name}}</a></li>
        </ul>
    @endforeach
@endsection