@extends('layouts.home')

@section('content')

    <h3 style="color: #BBBBBB">{{$subject->name}}</h3>
    <br>
    <small style="font-size: 100%" class="form-text text-muted">Semester Offered - {{implode(", ", json_decode($subject->semester))}}</small>
    <br><br>
    <?php $paragraphs = explode(PHP_EOL, $subject->description)?>
    @foreach($paragraphs as $paragraph)
        <p style="color: black;">{{{ $paragraph }}}</p>
    @endforeach
@endsection