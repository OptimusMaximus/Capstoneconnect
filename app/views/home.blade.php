@extends('layouts.master')

@section('title')
@parent
@stop
@section('styles')

@stop
@section('header')
Capstone Connect
@stop
@section('content')
<div class = "row">
	<div class="col-sm-12 col-md-5" style = "background-color: #73000A">
		<h>Announcements</h>
		
		<div class="InsideAnnouncement">
  			<h>Final Exams are coming up!</br>
  			12/06 Capstone Presentations 
  			</h>
  		</div>
  	</div>
 	<div class="col-sm-12 col-md-5 col-md-offset-2" style = "background-color: #73000A">
		<h>Recent Activity</h>
		
		<div class="InsideRecentActivity">
  			<h>Recent activity will be listed here. </h>  			
  		</div>
 	</div>
	
</div>
	


@stop