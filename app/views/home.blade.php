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
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-lg-4" style = "background-color: #73000A">
		<h3>Announcements</h3>
		
		<div class="InsideAnnouncement">
  			<?php
  				$mostRecentDate = Announcement::max('created_at');
  				$announce = Announcement::where('created_at', $mostRecentDate)->first();
  			?>

  			@if($announce != null)
  				<p1>
  					{{ $announce->announcement }}
  				</p1>
  			@endif

  		</div>
  	</div>
 	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-4" style = "background-color: #73000A">
		<h3>Recent Activity</h3>
		
		<div class="InsideRecentActivity">
  			<p1>
  				Need another function here
  			</p1>			
  		</div>
 	</div>
	
</div>
	


@stop