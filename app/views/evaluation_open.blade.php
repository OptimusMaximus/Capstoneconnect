@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Open Evaluations
@stop

@section('content')
   @foreach ($openEvals as $eval)
   	{{HTML::linkRoute("evaluation.show", 'Evaluation for '.$eval->created_at->toFormattedDateString(), $eval->id)}}
   	<br>
   @endforeach
@stop