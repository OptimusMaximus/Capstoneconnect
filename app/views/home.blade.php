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
    <div class="responsive-iframe-container iframe">
     <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%235F6B02&amp;ctz=America%2FNew_York" style=" border:solid 1px #777 " width="400" height="400" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>
  <!--  <h3>Recent Activity</h3>
    
        
    <div class="InsideRecentActivity">
        <?php
          $recent5 = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')
                        ->join('users', 'answers.answered_about','=','users.id')->take(8)->get();


        ?>
<!-- Recent Activity -->
      <!--  <p1>
        @foreach($recent5 as $recent)
        <p><font size='2'>{{$recent->first_name.' '.$recent->last_name}} was Evaluated at 
          {{$recent->created_at}}</font> </p>


        @endforeach 
        </p1>     
-->
      <!--</div>
  </div>-->
  
  </div>
@stop