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

 <p1>
      <font size =6 style="text-shadow:1px 1px 1px #000000;" color=73000A face ="cursive">Welcome to Capstone Connect!</br> 
      </font>
       <!-- <font color=73000A face ="cursive">
        Here is the your class's recent activity
        and the latest announcements from your professor.
       </font> 
-->
       </p1>

  </br>
</br>

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
    <img src="http://s3.amazonaws.com/cstest/teams%2FUSC_logo.jpg" alt="The Unversity of South Carolina" width="200" height="200" style="float:center" margin:right="20px">
 
	<!--	<h3>Recent Activity</h3>
		
		    
    <div class="InsideRecentActivity">
        <?php
          $recent5 = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')
                        ->join('users', 'answers.answered_about','=','users.id')->take(8)->get();


        ?>
<!-- Recent Activity -->
  		<!--	<p1>
  			@foreach($recent5 as $recent)
        <p><font size='2'>{{$recent->first_name.' '.$recent->last_name}} was Evaluated at 
          {{$recent->created_at}}</font> </p>


        @endforeach	
  			</p1>			
-->
  		</div>
 	</div>
	
</div>
	


@stop