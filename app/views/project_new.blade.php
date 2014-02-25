@extends('layouts.master')

@section('title')
@parent
@stop

@section('stylesheets')

@stop

@section('style')
@stop

@section('header')
Project Management
@stop

@section('content')
<h1><u>Create New Project</u></h1>

{{ Form::open(
    array('url' => URL::route('project.store'),
                'class' => 'form-horizontal',
                'role' => 'form'))}}

    <div class="form-group">  
        {{ Form::label('project_name', 'Project Name:', 
            array('class' => 'col-sm-2 control-label'))}}

        <div class="col-sm-5">
            {{ Form::text('project_name', empty($name)? '' : $name, 
                array('class' => 'form-control',
                      'placeholder' => 'Project Name'))}}
        </div>
    </div>

    <div class="form-group">  
        {{ Form::label('description', 'Description:', 
            array('class' => 'col-sm-2 control-label')

        )}}
        <div class="col-sm-5">
            {{ Form::textarea('description', empty($description)? '' : $description, 
                array('class' => 'form-control',
                      'placeholder' => 'Please add a short description for this project.'))}}
        </div>
    </div>

    <div class="form group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create Project', array('class'=>'btn btn-default pull-left'))}}
        </div>
    </div>

{{ Form::close() }}
@stop