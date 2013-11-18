@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
<h1>Capstone Connect</h1>
@stop

@section('styles')
.whitebox {
  background-color:#FFFFFF;
  width:500px;
  height:auto;
  margin: 0 auto;
  color:black;
  border:2px solid;
  border-radius:25px;
}
@stop

@section('content')
  
  <div class ="whitebox">
    {{ Form::open(array('url' => 'login')) }}
      
      <!-- if there are login errors, show them here -->
      @if (Session::get('loginError'))
        <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
      @endif

      <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
      </p>

      <p>
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', Input::old('email'), array('placeholder' => 'admin@admin.com')) }}
      </p>

      <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
      </p>

      <p>{{ Form::submit('Login') }}</p>
    {{ Form::close() }}
  </div>

@stop