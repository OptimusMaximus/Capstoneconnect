@extends('layouts.master')

@section('title')
@parent
@stop

@section('stylesheets')
@stop

@section('styles')
@stop

@section('header')
User Management
@stop


@section('content')
<!-- Form for adding a new student -->
<h1 class="text-center"><u>{{ $first_name." ".$last_name}}</u></h1>
<br>
{{ Form::open(
    array('url' => route('user.update', $id),
                'class' => 'form-horizontal',
                'role' => 'form',
                'method' => 'patch'))}}

    <div class="form-group">  
        {{ Form::label('name', 'First Name:', 
            array('class' => 'col-sm-2 control-label')
        )}}
        <div class="col-sm-5">
            {{ Form::text('first_name', empty($first_name)? '' : $first_name, 
                array('class' => 'form-control',
                            'placeholder' => 'John'
            ))}}
        </div>
    </div>
    <div class="form-group">  
        {{ Form::label('name', 'Last Name:', 
            array('class' => 'col-sm-2 control-label')
        )}}
        <div class="col-sm-5">
            {{ Form::text('last_name', empty($last_name)? '' : $last_name, 
                array('class' => 'form-control',
                            'placeholder' => 'Doe'
            ))}}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email Address:',
            array('class' => 'col-sm-2 control-label'
        ))}}
        <div class="col-sm-5">
            {{ Form::email('email', empty($email)? '' : $email, 
                    array('class' => 'form-control',
                                'placeholder' => 'johnd@email.sc.edu'
            ))}}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('Project', 'Project Group:',
            array('class' => 'col-sm-2 control-label'
        ))}}
        <div class="col-sm-5">
            <?php $projects = Project::all(); ?>
            <select name ='project' class="form-control">
                @foreach($projects as $project)
                    @if($project->name != 'Admin')
                        @if($project->id == $project_id)
                            <option value='{{$project->id}}' selected>{{$project->name}}</option>
                        @else
                            <option value='{{$project->id}}'>{{$project->name}}</option>
                        @endif
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    @if(!isset($first_name))
    <div class="form-group">  
        {{ Form::label('password', 'Password: ', 
            array('class' => 'col-sm-2 control-label')
        )}}
        <div class="col-sm-5">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>
    @endif
    <div class="form group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Update', array('class'=>'btn btn-default pull-left'))}}
        </div>
    </div>
{{ Form::close() }}

@stop