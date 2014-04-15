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
  <div class = "Login container text-left" >
    {{ Form::open(array('url'   => 'login', 
                        'class' => 'form-horizontal',
                        'role'  => 'form')) 
    }}
      
      <!-- login errors from Sentry -->
      @if (Session::get('loginError'))
        <div class = "alert alert-danger"> {{ Session::get('loginError') }} </div>
      @endif

      @if (Session::get('logoutSuccess'))
        <div class = "alert alert-success"> {{ Session::get('logoutSuccess') }} </div>
      @endif

      @if (Session::get('resetSuccess'))
        <div class = "alert alert-success"> {{ Session::get('resetSuccess') }} </div>
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

      <!-- successful registration -->
      @if (Session::get('registerSuccess'))
        <div class = "alert alert-success">{{ Session::get('registerSuccess') }}</div>
      @endif

      <div class="form-group">
        {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
          {{ Form::email('email', Input::old('email'), array('placeholder' => 'admin@sc.edu', 
                                                             'class'       => 'form-control')) }}
        </div>
      </div>

      <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>

      </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
        {{ Form::submit('login', array('class' => 'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to login')) }}
            


            <div class="checkbox-inline cc-remember-box">
                <label>
                {{ Form::checkbox('remember', 'First Choice', false, array('id' => 'remember' => 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to register for an account )) }} Remember me
                </label>
            </div>
        </div>
    </div>
    {{ Form::close() }}

    <div class="row">
        {{ HTML::link('reset','Reset Password', array('class' => 'blue col-sm-offset-2 col-sm-5', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to reset your password')) }}
    </div>
    <div class="row">
      <br>
      <div class="text-center">
        {{ HTML::link('register', 'Register!', array('class' => 'btn cc-btn-primary btn-lg', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to register for an account')) }}
      </div>
    </div>    
  </div>
@stop