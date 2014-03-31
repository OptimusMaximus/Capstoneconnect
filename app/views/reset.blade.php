@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('header')
<h1><b>Capstone Connect</b></h1>
@stop

@section('styles')
@stop

@section('content')
<div class = Login>
	<p></p>
  <!-- Form to create new password -->
	@if (Session::has('error'))
  <div class = "alert alert-warning">

  		{{ trans(Session::get('reason')) }} </div>
	@endif
 
	{{ Form::open(array('route' => array('reset', $token))) }}
 
  <p>{{ Form::label('email', 'Email') }}
  	{{ Form::text('email', Input::old('email'), array('placeholder' => 'admin@sc.edu')) }}
  </p>
 
  <p>{{ Form::label('password', 'Password') }}
  		{{ Form::text('password') }}</p>
 
	<p>{{ Form::label('password_confirmation', 'Password confirm') }}
  		{{ Form::text('password_confirmation') }}</p>
 
  {{ Form::hidden('token', $token) }}
 
  <p>{{ Form::submit('Submit') }}</p>
 
	{{ Form::close() }}
</div>
@stop