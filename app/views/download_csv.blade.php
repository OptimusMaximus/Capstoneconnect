@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Download CSV File
@stop

@section('content')

    <?php
        $answers = ExportCSV::all();
        //Get the evaluation id number
        $evalId = $answers->lists('eid', 'eid');        
    ?>

    <!-- Post message if successful -->
    @if (Session::get('screenAnnounce'))
        <div class = "alert alert-success"> {{ Session::get('screenAnnounce') }} </div>
    @endif

    @if($evalId == null)
        <p1> No evaluations have been completed yet.</p1>
    @endif

    @if($answers != null)
        @for($i = 1; $i <= count($evalId); $i++)

            {{ Form::open(array('route' => array('download_csv'))) }}

            <!-- eid is variable passed to controller, eid = $i -->
            {{ Form::hidden('eid', $i) }}            
      
            <div class="form group">
                {{ Form::submit("Download CSV File with Evaluation ID #$evalId[$i]", array('class'=>'btn btn-default')) }}
            </div>
            </br>        

        {{ Form::close() }}
        @endfor
    @endif


@stop