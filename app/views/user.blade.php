@extends('layouts.master')

@section('title')
@parent
@stop

@section('stylesheets')
@stop

@section('styles')
@stop

@section('header')
User Management
@stop


@section('content')
<div class = "User-Form container">
	<!-- Form for adding a new student -->
	<h1 class="text-center"><u>User</u></h1>
	<br>
	{{ Form::open(
	    array('url' => route('user.store'),
	                'class' => 'form-horizontal',
	                'role' => 'form'))}}

	    <div class="form-group">  
	        {{ Form::label('name', 'First Name:', 
	            array('class' => 'col-sm-2 control-label')
	        )}}
	        <div class="col-sm-5">
	            {{ Form::text('first_name', '', 
	                array('class' => 'form-control',
	                            'placeholder' => 'John'
	            ))}}
	        </div>
	    </div>
	    <div class="form-group">  
	        {{ Form::label('name', 'Last Name:', 
	            array('class' => 'col-sm-2 control-label')
	        )}}
	        <div class="col-sm-5">
	            {{ Form::text('last_name', '', 
	                array('class' => 'form-control',
	                            'placeholder' => 'Doe'
	            ))}}
	        </div>
	    </div>
	    <div class="form-group">
	        {{ Form::label('email', 'Email Address:',
	            array('class' => 'col-sm-2 control-label'
	        ))}}
	        <div class="col-sm-5">
	            {{ Form::email('email', '', 
	                    array('class' => 'form-control',
	                                'placeholder' => 'johnd@email.sc.edu'
	            ))}}
	        </div>
	    </div>
	    <div class="form-group">  
	        {{ Form::label('password', 'Password: ', 
	            array('class' => 'col-sm-2 control-label')
	        )}}
	        <div class="col-sm-5">
	            {{ Form::password('password', array('class' => 'form-control')) }}
	        </div>
	    </div>
	    <div class="form-group">  
	        {{ Form::label('name', 'User Type:', 
	            array('class' => 'col-sm-2 control-label')
	        )}}
	        <div class="col-sm-5">
	            {{ Form::select('group', array('U' => 'User', 'A' => 'Admin'), 'U', array('class' => 'form-control'))}}
	        </div>
	    </div>
	    <div class="form group">
	        <div class="col-sm-offset-2 col-sm-10">
	            {{ Form::submit('Add User', array('class'=>'btn btn-default pull-left'))}}
	        </div>
	    </div>
	{{ Form::close() }}
</div>

@stop