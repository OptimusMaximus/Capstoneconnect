@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('header')
<h1>Capstone Connect</h1>
@stop

@section('styles')
@stop

@section('content')
<div class = Login>
	<p></p>
	@if (Session::has('error'))
  		{{ trans(Session::get('reason')) }}
	@elseif (Session::has('success'))
  		An email to reset your password has been sent.
	@endif
 
	{{ Form::open(array('route' => 'request')) }}
	@if (!Session::has('success'))
 	Enter sc.edu email address associated with your account to reset password
 	
  	<p>{{ Form::label('email', 'Email') }}
  	{{ Form::text('email', Input::old('email'), array('placeholder' => 'admin@sc.edu')) }}	
  	</p>
 	
  	<p>{{ Form::submit('Submit') }}</p>
  	@endif

  	@if (Session::has('success'))
  	{{ HTML::link('login', 'Click here to return to login page', array('class' => 'blue'))}}
 	@endif
	{{ Form::close() }}
</div>
@stop