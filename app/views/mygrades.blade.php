@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

	
@stop
@section('header')
<h1>My Grades</h1>
@stop

@section('content')

<div class="GradesWhite">
	<div class="GradeAverageText">
 	  <h>Your current average is: </h>
  </div>
  <div class="Evals">
    <div class="btn-group-vertical" style="margin-top:20px; margin-left:5px; margin-right:5px;">
      <button type="button" class="btn btn-default">Evaluations 1</button>
      <button type="button" class="btn btn-default">Evaluations 2</button>
      <button type="button" class="btn btn-default">Evaluations 3</button>
      <button type="button" class="btn btn-default">Evaluations 4</button>
      <button type="button" class="btn btn-default">Evaluations 5</button>
      <button type="button" class="btn btn-default">Evaluations 6</button>
      <button type="button" class="btn btn-default">Evaluations 7</button>
      <button type="button" class="btn btn-default">Evaluations 8</button>
    </div>
  </div>
  <div class="WeeklyGrades">
    <p>Weekly grades go here</p>
  </div> 
 
  <div class="AllGrades">
    <div class="InsideAllGrades">
      <h>All grades go here!</h>
      <h>More grade stuff.</h>
    </div>
  </div>
</div> 

@stop