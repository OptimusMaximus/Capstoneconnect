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
.RecentActivity {
	background-color:#73000A;
	height:350px;
	width:480px;
	margin:30px 85px 10px 10px;
	 float: right;
     bottom: 0;
     right: 0;

	border:2px solid black;
	}

	.InsideRecentActivity {
	background-color:grey;
	height:300px;
	width:465px;
	margin-right:5px;
	float:right;
	border:2px solid black;
	
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
 <div class="Announcements">



<div class="InsideAnnouncement">

<br>
 
    <button type="button" class="btn btn-default btn-xs">Evaluation 1</button>
    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 2</button>
    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 3</button>    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 4</button>   <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 5</button>
    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 6</button>    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 7</button>    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 8</button>    <br> <br>
<button type="button" class="btn btn-default btn-xs">Evaluation 9</button>  <br><br>
<button type="button" class="btn btn-default btn-xs">Evaluation 10</button><br><br>

 </div>
  <div class="WeeklyGrades">
 </div>
 </div>
<div class="RecentActivity">
<h>
Recent Activity
</h>
<div class="InsideRecentActivity">
<h>
Activity here!
</h>
</div>
 </div>
  


  

@stop