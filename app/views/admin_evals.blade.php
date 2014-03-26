@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Capstone Connect
@stop

@section('content')
    
    <h2>Open evaluations</h2>
    <hr>
    @foreach ($openEvals as $open)
        {{HTML::linkRoute("evaluation.edit", "Evaluation for ".$open->created_at, $open->id)}} <br><br>
    @endforeach

    <h2>Closed evaluations</h2>
    <hr>
    @if(!is_null($closedEvals))
        @foreach ($closedEvals as $closed)
            {{HTML::linkRoute("evaluation.edit", "Evaluation for ".$closed->created_at, $closed->id)}} <br><br>
        @endforeach
    @endif
    
    {{HTML::linkRoute('evaluation.create', 'Create New Evaluation', NULL, array('class' => 'btn btn-default pull-left'))}}
@stop