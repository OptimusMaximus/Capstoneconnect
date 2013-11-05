@extends('layouts.master')

@section('title')
@parent
@stop
@section('styles')
.BigWhite {
	background-color:#FFFFFF;
	height:600px;
	width:900px;
	margin: 0 auto;

}
.Announcements {
	background-color:Blue;
	height:550px;
	width:300px;
	margin: 300 auto;
	margin:30px 30px 30px 30px;
	border:2px solid black;
	float:left;
	
	
}
.RecentActivity {
	background-color:Green;
	height:200px;
	width:490px;
	margin:30px 30px 10px 10px;
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
<h1>Capstone Connect</h1>
@stop

@section('content')

<div class="BigWhite">
 <div class="Announcements">
 <h>
 Announcements
 </h>

 </div>
<div class="RecentActivity">
<h>
Recent Activity
</h>
 </div>
 <div class="Calendar">
<iframe src="https://www.google.com/calendar/embed?src=seanfrankett%40gmail.com&ctz=America/New_York" style="border: 20" width="490" height="320" frameborder="0" scrolling="no"></iframe>
<h>
Calendar
</h>
 </div>

</div>  
  

@stop