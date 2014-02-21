@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Download CSV File
@stop

@section('content')
    {{ Form::open(        
         array('url' => URL::route('download_csv'),
                    'role' => 'form'))}}

        <!-- Post message if successful -->
        @if (Session::get('screenAnnounce'))
            <div class = "alert alert-success"> {{ Session::get('screenAnnounce') }} </div>
         @endif

        <div class="form group">
            {{ Form::submit('Download CSV', array('class'=>'btn btn-default')) }}
        </div>
    {{ Form::close() }}



@stop