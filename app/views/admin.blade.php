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
          <td>Discription</td>
          <td>Date Created</td>
          <td>Edit</td>
          <td>Remove</td>
        </tr> <!-- trow1 -->
      <?php $projectGroups = ProjectGroup::all();?>
      @foreach($projectGroups as $pjgroup)
          <tr>
          <td>{{$pjgroup->pgname}}</td>
          <td>{{$pjgroup->discription}}</td>
          <td>{{$pjgroup->date_created}}</td>
          <td>Edit</td>
          <td>Remove</td>
          </tr> <!-- trow1 -->
      @endforeach
      </table>
      <hr>
      <h4><u><b>Add New Student</b></u></h4>  
      <!-- Form for adding a new student -->
      {{ Form::open(
        array('url' => 'student',
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
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label for="groupName" class="col-sm-2 control-label">Group Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="groupName" placeholder="Group One">
          </div>
        </div>
        <div class="form-group">
          <label for="Discription" class="col-sm-2 control-label">Group Description:</label>
          <div class="col-sm-5">
            <textarea class="form-control" id="Discription" placeholder="Group description" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add Group</button>
          </div>
        </div>
      </form>
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
                    {{$pjgroup->pgname}}
                </a>
              </h4>
            </div>
            <div id=<?php echo("\"collapse".$panelNum."\""); ?> class="panel-collapse collapse">
              <div class="panel-body">
                <?php $students = Student::where('pgid',$pjgroup->pid)->get()?>
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
        <?php $questions=Question::all();?> 
        <table class="table table-bordered table-groups pull-right">
          @foreach($questions as $question)

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
      {{ Form::open(array('action' => 'AdminToolsController@createQuestionnaire')) }}
      {{ Form::label('q1', 'Question1') }}
        {{ Form::text('q1', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q2', 'Question2') }}
        {{ Form::text('q2', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q3', 'Question3') }}
        {{ Form::text('q3', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q4', 'Question4') }}
        {{ Form::text('q4', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q5', 'Question5') }}
        {{ Form::text('q5', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q6', 'Question6') }}
        {{ Form::text('q6', '', array('class' => 'createQuesForm')) }}
        <br />       
      {{ Form::label('q7', 'Question7') }}
        {{ Form::text('q7', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q8', 'Question8') }}
        {{ Form::text('q8', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q9', 'Question9') }}
        {{ Form::text('q9', '', array('class' => 'createQuesForm')) }}
        <br />
      {{ Form::label('q10', 'Question10') }}
        {{ Form::text('q10', '', array('class' => 'createQuesForm')) }}      

       <p>{{ Form::submit('create') }}</p>
     {{ Form::close() }}
    </div><!-- question -->
  </div><!-- tab-content -->
</div><!-- container -->
@stop
