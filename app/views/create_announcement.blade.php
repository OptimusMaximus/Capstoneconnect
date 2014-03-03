@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Create Annoucements
@stop

@section('content')
    {{ Form::open(        
         array('url' => URL::route('create_announcement'),
                    'role' => 'form'))}}

        <!-- Post message if successful -->
        @if (Session::get('screenAnnounce'))
            <div class = "alert alert-success"> {{ Session::get('screenAnnounce') }} </div>
         @endif

        <div class="form-group col-centered">                  
            {{ Form::textarea('announcement', '', 
                array('class' => 'col-xs-12',
                'placeholder' => 'Please enter new announcements. This will replace any previous announcements.'))}}                
        </div>  
        </br>

        <div class="form group">
            {{ Form::submit('Create Announcements', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to submit a new announcement')) }}
        </div>
    {{ Form::close() }}



@stop