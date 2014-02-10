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
	<div class="Announcements">
		<h>Announcements</h>
		
		<div class="InsideAnnouncement">
  			<h>Final Exams are coming up!<br />
  			12/06 Capstone Presentations 
  			</h>
  		</div>
 	</div>
  
	<div class="RecentActivity">
		<h>Recent Activity</h>
		<div class="InsideRecentActivity">
			<h>Recent activity will be listed here.</h>
		</div>
 	</div>

 	<div class="Calendar">
		<iframe src="https://www.google.com/calendar/embed?src=seanfrankett%40gmail.com&ctz=America/New_York" style="border: 20" width="95%" height="95%" frameborder="0" scrolling="no"></iframe>
 	</div>

@stop