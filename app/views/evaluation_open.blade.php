@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Open Evaluations
@stop

@section('content')
   @foreach ($openEvals as $eval)
   		{{HTML::linkRoute("evaluation.show", 'Evaluation for '.date('M jS', $eval->created_at), array('id' => $eval->id)}}
   @endforeach
@stop