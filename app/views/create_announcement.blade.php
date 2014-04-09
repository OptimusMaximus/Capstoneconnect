@extends('layouts.master')

@section('title')
@parent
@stop

@section('head')
@stop

@section('header')
Create or Delete Annoucements
@stop
{{--This allows a view to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="SmallWhite container"; ?>
@show
@section('content')
<!-- this @include is needed for confirmation popup -->
@include('delete_confirm')

    <h4>Only the last 5 announcements will be posted.</h4>
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
    </br>
    <?php
        $id = Announcement::max('id');
    ?>
    @if($id != null)
        {{Form::open(array('url' => URL::route('announcement.destroy', $id),
                    'role' => 'form', 'method' => 'delete'))}}
        <!-- Popup with confirmation when submitted -->
        {{ Form::submit('Delete All Announcements', array('class'=>'btn cc-btn-primary', 'type' => 'submit', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 
            'data-title' => "Delete All Announcements?", 'data-message'=> "Are you sure you want to delete all announcements?", 'data-placement' => 'top', 'title' => 'Click here to delete all announcements')) }}
        {{Form::close()}}
    @endif
@stop