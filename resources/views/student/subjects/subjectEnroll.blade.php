@extends('layouts.home')

@section('content')
    @foreach($subjects as $subject)
        <subject-enroll></subject-enroll>
    @endforeach
@endsection