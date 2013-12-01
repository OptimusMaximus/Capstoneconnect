@extends('layouts.master')

@section('title')
@parent
@stop

@section('stylesheets')
<link rel="stylesheet" href="css/admin-bootstrap-overwrite.css" />
@stop

@section('styles')
@stop

@section('header')
<h1>Admin Tools</h1>
@stop


@section('content')
<div class="container admin-container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#manage" data-toggle="tab">Manage Groups and Users</a></li>
    <li><a href="#eval" data-toggle="tab">View Evaluations</a></li>
    <li><a href="#question" data-toggle="tab">Create New Questions</a></li>
  </ul>
  <div class="tab-content container">
    <!-- Manage Groups and Users tab -->
    <div id="manage" class="tab-pane active">
      <table class="table table-bordered table-responsive table-hover table-groups">
        <tr>
          <td>Name</td>
          <td>Description</td>
          <td>Date Created</td>
          <td>Edit</td>
          <td>Remove</td>
        </tr> <!-- trow1 -->
      <?php $projectGroups = ProjectGroup::all();?>
      @foreach($projectGroups as $pjgroup)
          <tr>
          <td>{{$pjgroup->name}}</td>
          <td>{{$pjgroup->description}}</td>
          <td>{{$pjgroup->created_at}}</td>
          <td>Edit</td>
          <td>Remove</td>
          </tr> <!-- trow1 -->
      @endforeach
      </table>
      <hr>
      <h4><u><b>Add New Student</b></u></h4>  
      <!-- Form for adding a new student -->
      {{ Form::open(
        array('url' => 'addNewStudent',
              'class' => 'form-horizontal',
              'role' => 'form'))}}
      
        <div class="form-group">  
          {{ Form::label('name', 'First Name:', 
            array('class' => 'col-sm-2 control-label')
          )}}
          <div class="col-sm-5">
            {{ Form::text('first_name', '', 
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
            {{ Form::text('last_name', '', 
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
            {{ Form::email('email', '', 
                array('class' => 'form-control',
                      'placeholder' => 'johnd@email.sc.edu'
            ))}}
          </div>
        </div>
        <div class="form group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Add Student', array('class'=>'btn btn-default'))}}
          </div>
        </div>
      {{ Form::close() }}
      <br>
      <br>
      <hr>
      <h4><u><b>Creat New Group</b></u></h4>
      {{ Form::open(
        array('url' => 'addNewGroup',
              'class' => 'form-horizontal',
              'role' => 'form'))}}
      
        <div class="form-group">  
          {{ Form::label('group_name', 'Group Name:', 
            array('class' => 'col-sm-2 control-label')
          )}}
          <div class="col-sm-5">
            {{ Form::text('group_name', '', 
              array('class' => 'form-control',
                    'placeholder' => 'Group Blank'
            ))}}
          </div>
        </div>
        <div class="form-group">  
          {{ Form::label('description', 'Description:', 
            array('class' => 'col-sm-2 control-label')
          )}}
          <div class="col-sm-5">
            {{ Form::textarea('description', '', 
              array('class' => 'form-control',
                    'placeholder' => 'blah blah blah'
            ))}}
          </div>
        </div>
        <div class="form group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Add Group', array('class'=>'btn btn-default'))}}
          </div>
        </div>
      {{ Form::close() }}
    </div><!-- manage -->

    <!-- Evaluations page -->
    <div id="eval" class="tab-pane">
      <div class="row">Discription<div class="col-xs-2 panel-group" id="accordion">
          <?php $panelNum=0; 
                $projectGroups = ProjectGroup::all();
          ?>
          @foreach($projectGroups as $pjgroup) 
          <?php ++$panelNum; ?>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href=<?php echo("\"#collapse".$panelNum."\""); ?>>
                    {{$pjgroup->name}}
                </a>
              </h4>
            </div>
            <div id=<?php echo("\"collapse".$panelNum."\""); ?> class="panel-collapse collapse">
              <div class="panel-body">
                <?php $students = Student::where('pgid',$pjgroup->id)->get()?>
                @foreach($students as $student)
                  <button type="button" class="btn btn-default">
                    {{$student->first_name." ".$student->last_name}}
                  </button>
                  <br>
                  <br>
                @endforeach
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <?php $evaluations=Evaluation::all();?> 
        <table class="table table-bordered table-groups pull-right">
          @foreach($evaluations as $evaluation)

          <tr>
            <td>fasd</td>
            <td>adsf</td>
            <td>test</td>
          </tr>
          <tr>
            <td>adsf</td>
            <td>dsfa</td>
            <td>dsfa</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div><!-- eval -->

    <div id="question" class="tab-pane">
      {{ Form::open(        
         array('url' => 'addNewEvaluation',
              'role' => 'form'))}}
        @for($i = 1; $i <= 10; $i++)
          <div class="form group">
          {{ Form::label('q'.$i, 'Question '.$i,
             array('class' => 'col-sm-2 control-label'))}}
          {{ Form::text('q'.$i,'',
             array('class' => 'form-control',
                   'placeholder' => 'enter question'))}}
          </div>
        @endfor
        <div class="form group">
          {{ Form::submit('Create Evaluation', array('class'=>'btn btn-default'))}}
        </div>
      {{ Form::close() }}
    </div><!-- question -->
  </div><!-- tab-content -->
</div><!-- container -->
@stop
