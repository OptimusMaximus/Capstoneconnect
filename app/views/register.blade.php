@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('head')
<script>
    //Verify that the two passwords match each other and that they are at least 5 characters long
    $(document).ready(function() {
        $("#submit").click(function(){
            $(".error").hide(); //Clear any previous errors
            var validated = false;
            var passwordVal = $("#password").val();
            var checkVal = $("#password-check").val();
            var validLength = /.{5,}/.test(passwordVal);//Test that password is at least 5 characters long

            if(validLength == false) {
                $("#password").after('<span class="error">Password must be a length of at least 5 characters.</span>');
                validated = true;
            }
            if (passwordVal == '') {
                $("#password").after('<span class="error">Please enter a password.</span>');
                validated = true;
            } else if (checkVal == '') {
                $("#password-check").after('<span class="error">Please re-enter your password.</span>');
                validated = true;
            } else if (passwordVal != checkVal ) {
                $("#password-check").after('<span class="error">Passwords do not match.</span>');
                validated = true;
            }
            if(validated == true) {return false;}
        });
    });
</script>  
@stop

@section('header')

@stop

@section('content')
<div class='LittleWhite container'>
    @if (Session::get('registerError'))
        <div class = "alert alert-danger"> {{ Session::get('registerError') }} </div>
    @endif
    {{ Form::open(array('url' => route('activate'), 'role'=>'form', 'class'=>'form-horizontal')) }}
        <div class='form-group'>
            {{ Form::label('email', 'Email', array('class'=>'col-sm-3 control-label')) }}
            <div class='col-sm-6'>
                {{ Form::email('email', '', array('class'=>'form-control', 'placeholder' => 'username@email.sc.edu')) }}
            </div>
        </div>

        <div class='form-group'>
            {{ Form::label('password', 'Password', array('class'=>'col-sm-3 control-label')) }}
            <div class='col-sm-6'>
                {{ Form::password('password', array('class'=>'form-control', 'id'=>'password')) }}
            </div>
        </div>

        <div class='form-group'>
            {{ Form::label('password', 'Reenter Password', array('class'=>'col-sm-3 control-label')) }}
            <div class='col-sm-6'>
                {{ Form::password('password-check', array('class'=>'form-control', 'id'=>'password-check')) }}
            </div>
        </div>       

        {{ Form::submit('Register', array('class'=>'btn btn-default', 'id'=>'submit')) }}
    {{ Form::close() }}
</div>
@stop