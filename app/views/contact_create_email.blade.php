@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Update Contact Email
@stop

{{--This allows a view to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="SmallWhite container"; ?>
@show

@section('content')   

     <!-- Post message if successful -->
    @if (Session::get('screenAnnounce'))
        <div class = "alert alert-success"> {{ Session::get('screenAnnounce') }} </div>
    @endif

     @if (Session::get('warning'))
        <div class = "alert alert-danger"> {{ Session::get('warning') }} </div>
    @endif

     <!-- login errors from Validator -->
      @if ($errors->count() > 0)
        <div class = "alert alert-danger">
          <p>
            {{ $errors->first('email') }}
            {{-- $errors->first('password') --}}
          </p>
        </div>
      @endif

    <h4>You can update your contact email so you can receive emails from Capstone Connect</h4>
    </br>

    <?php
        $contact = Contact::orderBy('created_at', 'desc')->first();
        if($contact != null)
            $contactEmail = $contact->contact_email;
    ?>

    @if($contact != null)
        <p>Your current contact email address is: {{ $contactEmail }}</p> 
    @else
        <div class = "alert alert-danger" >
            <p>You do not have a current contact email address setup.  Please enter a email address below. </p>
        </div>
    </br>
    @endif

	{{ Form::open(array('url'   => 'contact_create_email', 
                        'class' => 'form-horizontal',
                        'role'  => 'form')) }}

    <!--<div class="form-group">
        {{ Form::label('oldEmail', 'Old Contact Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
          {{ Form::email('oldEmail', Input::old('oldEmail'), array('placeholder' => 'email@email.com', 
                                                             'class'       => 'form-control')) }}
        </div>
    </div>


    <div class="form-group">
        {{ Form::label('oldPassword', 'Password Used for Old Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
            {{ Form::password('oldPassword', array('class' => 'form-control')) }}
        </div>
    </div>-->

	<div class="form-group">
        {{ Form::label('email', 'New Contact Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
          {{ Form::email('email', Input::old('email'), array('placeholder' => 'example@gmail.com', 
                                                             'class'       => 'form-control')) }}
        </div>
    </div>

    <!--<div class="form-group">
    	{{ Form::label('password', 'Password Used for New Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>-->
    
    <div class = "form group">
    	<div class="col-sm-offset-2 col-sm-8">       	
        	{{ Form::submit('Update', array('class' => 'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Update new Contact Email')) }}
        </div>                        
    </div>  
    {{ Form::close() }}

@stop