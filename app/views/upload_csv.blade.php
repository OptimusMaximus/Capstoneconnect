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

    <h4>Choose a Student CSV File to upload</h4>  
    </br>
    </br>
    {{ Form::open(array('route' => array('upload_csv'))) }}

    {{ Form::file('csv') }}

    <div class = "form group">
        </br>
        </br>
        <div class = "col-sm-12">
            {{ Form::submit("Upload CSV File", array('class'=>'btn cc-btn-primary btn-responsive')) }}
        </div>                        
    </div>
    {{ Form::close() }}
@stop