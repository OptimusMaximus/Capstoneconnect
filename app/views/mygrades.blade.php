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
 	<h>
 		Your current average is: 
 	</h>
 </div>
 <div class="Evals">



<div class="btn-group-vertical" style="margin-top:20px;">
<button type="button" class="btn btn-default">Evaluations 1</button>

  <button type="button" class="btn btn-default">Evaluations 2</button>
  <button type="button" class="btn btn-default">Evaluations 3</button>
  <button type="button" class="btn btn-default">Evaluations 4</button>
  <button type="button" class="btn btn-default">Evaluations 5</button>
  <button type="button" class="btn btn-default">Evaluations 6</button>
  <button type="button" class="btn btn-default">Evaluations 7</button>
  <button type="button" class="btn btn-default">Evaluations 8</button>




 </div>
  <div class="WeeklyGrades">
 </div>
 </div>
 
<div class="AllGrades">
<h>
All grades go here!
</h>
<div class="InsideAllGrades">
<h>
More grade stuff.
</h>
</div>
 </div>


  

@stop