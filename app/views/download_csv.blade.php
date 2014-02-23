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
    ?>

    {{ Form::open( array('url' => URL::route('download_csv', $answers),
                    'role' => 'form'))}}

        <!-- Post message if successful -->
        @if (Session::get('screenAnnounce'))
            <div class = "alert alert-success"> {{ Session::get('screenAnnounce') }} </div>
        @endif

        
        
        @if($answers != null)
            @foreach($answers as $row)
               <?php $eid = ExportCSV::find($row->eid); ?>
                <div class="form group">
                    {{ Form::submit("Download CSV with Evaluation ID #$eid->eid", array('class'=>'btn btn-default')) }}
                </div>
                </br>
            @endforeach
        @endif

    {{ Form::close() }}



@stop