@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Post New Annoucement
@stop
{{--This allows a veiw to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="SmallWhite container"; ?>
@show
@section('content')
    </br>
    {{ Form::open(        
         array('url' => URL::route('create_announcement'),
                    'role' => 'form'))}}

        <!-- Post message if successful -->
        @if (Session::get('screenAnnounce'))
            <div class = "alert alert-success"> {{ Session::get('screenAnnounce') }} </div>
         @endif

        <div class="form-group">                  
            {{ Form::textarea('announcement', '', 
                array('class' => 'form-control',
                'placeholder' => 'Please enter a new announcement.'))}}                
        </div>  
        </br>

        <div class="form group">
            {{ Form::submit('Create Announcement', array('class'=>'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to submit a new announcement')) }}
        </div>
    {{ Form::close() }}
@stop