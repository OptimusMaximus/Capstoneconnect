@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Update Contact Email and Password
@stop

@section('content')   

    <p>You can update your contact email and password so you can receive emails from Capstone Connect</p>
    </br> 

	{{ Form::open(array('url'   => 'contact_create_email', 
                        'class' => 'form-horizontal',
                        'role'  => 'form')) }}

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
            {{ $errors->first('password') }}
          </p>
        </div>
      @endif

    <div class="form-group">
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
    </div>

	<div class="form-group">
        {{ Form::label('email', 'New Contact Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
          {{ Form::email('email', Input::old('email'), array('placeholder' => 'email@email.com', 
                                                             'class'       => 'form-control')) }}
        </div>
    </div>


    <div class="form-group">
    	{{ Form::label('password', 'Password Used for New Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>
    
    <div class = "form group">
    	<div class="col-sm-offset-2 col-sm-8">       	
        	{{ Form::submit('Update', array('class' => 'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Update')) }}
        </div>                        
    </div>  
    {{ Form::close() }}

@stop