@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('header')

@stop

@section('content')
<div class='LittleWhite container'>
    {{ Form::open('url' => route('register.submit') array('role'=>'form', 'class'=>'form-horizontal')) }}
        <div class='form-group'>
            {{ Form::label('email', 'Email', array('class'=>'col-sm-3 control-label')) }}
            <div class='col-sm-6'>
                {{ Form::email('email', 'blank@sc.edu', array('class'=>'form-control')) }}
            </div>
        </div>

        <div class='form-group'>
            {{ Form::label('password', 'Password', array('class'=>'col-sm-3 control-label')) }}
            <div class='col-sm-6'>
                {{ Form::password('password', array('class'=>'form-control')) }}
            </div>
        </div>

        {{ Form::submit('Register', array('class'=>'btn btn-default')) }}
    {{ Form::close() }}
</div>
@stop