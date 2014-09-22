@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Open Evaluations
@stop

{{--This allows a veiw to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="SmallWhite container"; ?>
@show

@section('content')
   @foreach ($openEvals as $eval)
   		<div>
   		{{'This Evaluation closes on '.$eval->close_at->toFormattedDateString()." "}}
   		{{HTML::linkRoute("evaluation.show", 'Open', $eval->id, array('class' => 'btn cc-btn-primary btn-xs'))}}
   		</div>
   		<br>
   @endforeach
@stop