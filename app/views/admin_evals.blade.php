@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Manage Evaluations
@stop
{{--This allows a veiw to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="SmallWhite container"; ?>
@show

@section('content')
    
    <h2>Open evaluations</h2>
    <hr>
    @foreach ($openEvals as $open)
        {{HTML::linkRoute("evaluation.edit", $open->title." closes on ".$open->close_at->toFormattedDateString(), $open->id)}} <br><br>
    @endforeach

    <h2>Closed evaluations</h2>
    <hr>
    @if(!is_null($closedEvals))
        @foreach ($closedEvals as $closed)
            {{HTML::linkRoute("evaluation.edit", $closed->title." closed on ".$closed->close_at->toFormattedDateString(), $closed->id)}} <br><br>
        @endforeach
    @endif
    
    {{HTML::linkRoute('evaluation.create', 'Create New Evaluation', NULL, array('class' => 'btn btn-default pull-left'))}}
@stop