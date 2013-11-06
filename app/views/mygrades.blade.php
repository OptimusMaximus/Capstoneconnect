@extends('layouts.master')

@section('title')
@parent
@stop
@section('styles')
.BigWhite {
	background-color:#FFFFFF;
	height:600px;
	width:1200px;
	margin: 0 auto;

}
.Announcements {	
	background-color:#73000A;
	height:550px;
	width:590px;
	//margin: 300 auto;
	margin:30px 30px 30px 30px;
	border:2px solid black;
	float:left;
	} 	

	.InsideAnnouncement {
	background-color:#73000A;
	height:550px;
	width:120px;
	border:2px scrollingd black;
	margin: 0 auto;
	margin:25px, 0px, 25px,0px;
	float:left;
	
}
	.WeeklyGrades {
	background-color:Grey;
	height:550px;
	width:450px;
	border:2px scrollingd black;
	margin: 0 auto;
	
	float:right;
	
}
.AllGrades {
	background-color:#73000A;
	height:350px;
	width:480px;

	margin:210px 30px 10px 10px;
	 float: right;
     bottom: 0;
     right: 0;

	border:2px solid black;
	}

	.InsideAllGrades {
	background-color:grey;
	height:300px;
	width:465px;
	margin-right:5px;
	float:right;
	border:2px solid black;
	
}
.GradeAverageText{
	float: right;
	margin-right: 225px;
	color: black;
}
	.Calendar {
	background-color:Red;
	height:320px;
	width:490px;
	margin:15px 30px 10px 10px;
	float:right;
	border:2px solid black;
	}
@stop
@section('header')
<h1>My Grades</h1>
@stop

@section('content')


<div class="BigWhite">
	<div class="GradeAverageText">
 	<h>
 		Your current average is: 
 	</h>
 </div>
 <div class="Announcements">



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