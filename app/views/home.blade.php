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
        <!-- Display only the 5 most recent announcements -->
  			<?php  				
          $id = Announcement::max('id');     
  			?>

        <!-- Pull announcements from database if one exists -->
  			@if($id != null)
  				@for($i = $id; $i >= $id-4; $i--)
            <p1>
           
              <?php
                $announce = Announcement::where('id', $i)->first();
              ?>
              @if($announce !== null )
  					     {{ $announce->announcement }}
                </br>
                </br>
              @endif
  				</p1>
          @endfor
  			@endif
  	</div>

  </div>

  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-2 col-md-5 col-lg-4 col-lg-offset-2" style = "background-color: #FFFFFF">

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
</div>
@stop