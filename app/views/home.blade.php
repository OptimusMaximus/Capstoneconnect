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
	background-color:#73000A;
	height:550px;
	width:300px;
	margin: 300 auto;
	margin:30px 30px 30px 30px;
	border:2px solid black;
	float:left;
	} 	

	.InsideAnnouncement {
	background-color:Grey;
	height:500px;
	width:275px;
	border:2px scrollingd black;
	margin: 0 auto;
	
}
.RecentActivity {
	background-color:#73000A;
	height:200px;
	width:490px;
	margin:30px 30px 10px 10px;
	float:right;
	border:2px solid black;
	}

	.InsideRecentActivity {
	background-color:grey;
	height:165px;
	width:475px;
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
<h1>Capstone Connect</h1>
@stop

@section('content')


<div class="BigWhite">
 <div class="Announcements">

 <h>
 Announcements
 </h>
<div class="InsideAnnouncement">
  <h>
  Here
  </h>
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
 <div class="Calendar">
<iframe src="https://www.google.com/calendar/embed?src=seanfrankett%40gmail.com&ctz=America/New_York" style="border: 20" width="490" height="320" frameborder="0" scrolling="no"></iframe>
<h>
Calendar
</h>
 </div>

</div>  
  

@stop