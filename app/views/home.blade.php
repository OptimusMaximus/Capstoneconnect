@extends('layouts.master')

@section('title')
@parent
@stop
@section('styles')

@stop
@section('header')
Welcome to Capstone Connect
@stop
@section('content')

<div class = "row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 Announcements" style = "background-color: #73000A">
		<h3>Announcements</h3>	

		<div class="InsideAnnouncement">
        <!-- Display only the most recent announcement -->
  			<?php
  				$mostRecentDate = Announcement::max('created_at');
  				$announce = Announcement::where('created_at', $mostRecentDate)->first();
  			?>

        <!-- Pull announcement from database if one exists -->
  			@if($announce != null)
  				<p1>
  					{{ $announce->announcement }}
  				</p1>
  			@endif
  	</div>

  </div>

  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-5 col-lg-6" style = "background-color: #FFFFFF">

<?php $now = Carbon::now();
      $currMonthCount = count($currMonthEvals);
      $nextMonthCount = count($nextMonthEvals);
      $cal1data=array();
      $cal2data=array();

      foreach ($currMonthEvals as $eval) {
        if($eval->close_at->gte($now)){
          $cal1data[$eval->close_at->day]=URL::route('evaluation.show', $eval->id);
        }
      }
      foreach ($nextMonthEvals as $eval) {
        $cal2data[$eval->close_at->day]=URL::route('evaluation.show', $eval->id);
      }
?>
  
  <div class="calendar">
    {{Calendar::generate($now->year, $now->month, $cal1data)}}
  </div>
  <?php $now->addMonth(); ?>
  <div class="calendar">
    {{Calendar::generate($now->year,$now->month, $cal2data)}}
  </div>
</div>
@stop