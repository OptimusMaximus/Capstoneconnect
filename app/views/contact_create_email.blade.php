@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Update Contact Email and Password
@stop

@section('content')

    

	{{ Form::open(array('url'   => 'contact_create_email', 
                        'class' => 'form-horizontal',
                        'role'  => 'form')) }}

	<div class="form-group">
        {{ Form::label('email', 'New Contact Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
          {{ Form::email('email', Input::old('email'), array('placeholder' => 'email@email.com', 
                                                             'class'       => 'form-control')) }}
        </div>
    </div>


    <div class="form-group">
    	{{ Form::label('password', 'Password Used for Email Address', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-8">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>
    
    <div class = "form group">
    	<div class="col-sm-offset-2 col-sm-8">       	
        	{{ Form::submit('Submit new contact email', array('class' => 'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Submit new contact email')) }}
        </div>                        
    </div>  
    {{ Form::close() }}

@stop