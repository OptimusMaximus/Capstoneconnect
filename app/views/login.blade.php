@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('header')
Capstone Connect
@stop

@section('styles')
@stop

@section('content')
  <div class = Login >
    <p></p>
    {{ Form::open(array('url' => 'login')) }}
      
      <!-- login errors from Sentry -->
      @if (Session::get('loginError'))
        <div class = "alert alert-danger"> {{ Session::get('loginError') }} </div>
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

      <p>
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', Input::old('email'), array('placeholder' => 'admin@sc.edu')) }}
      </p>

      <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
      </p>
      <p>
          <span class="login-checkbox">
              <input id="remember" name="remember" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
              <label class="choice" for="remember">Keep me signed in</label>
          </span>   
      </p>
      <p>{{ Form::submit('Login') }}</p>
    {{ Form::close() }}
    
    {{ HTML::link('reset','Reset Password', array('class' => 'blue')) }}
  
    
    
  </div>
@stop