@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Upload CSV
@stop

{{--This allows a view to override the--}}
{{--main div's class value--}}
@section('container_class_value')
<?php $containerClass="XSmallWhite container"; ?>
@show
@section('content')  

    <!-- Post message if successful -->
    @if (Session::get('message'))
        <div class = "alert alert-success"> {{ Session::get('message') }} </div>
    @endif

    <!-- Post message if there is an error -->
    @if (Session::get('error'))
        <div class = "alert alert-warning"> {{ Session::get('error') }} </div>
    @endif

    <h4>Choose a Student CSV File to upload</h4>  
    </br>
    </br>
    
    {{ Form::open(array('route' => array('upload_csv'), 'files' => true)) }}

    {{ Form::file('csv_file') }}

    <div class = "form group">
        </br>
        </br>
        <div class = "col-sm-12">
            {{ Form::submit("Upload CSV File", array('class'=>'btn cc-btn-primary btn-responsive')) }}
        </div>                        
    </div>
    {{ Form::close() }}
@stop