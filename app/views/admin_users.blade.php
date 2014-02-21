@extends('layouts.master')

@section('title')
@parent
@stop

@section('stylesheets')
@stop

@section('styles')
@stop

@section('head')
<script>
$(document).ready(function(){
   $(function() {
        $('tr.parent td')
            .on("click","span.btn", function(){
                var idOfParent = $(this).parents('tr').attr('id');
                $('tr.child-'+idOfParent).toggle('fast');
            });
    });
});
</script>
@stop

@section('header')
Admin Tools
@stop


@section('content')
<div id="manage" class="tab-pane active">
    <table class="table gamecock-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Date Created</th>
                <th colspan=2>options</th>
            </tr>
        </thead>
        <tbody>
            <?php $projects = Project::all();?>
            @if($projects != null)
                @foreach($projects as $project)
                    <?php $users = User::where('project_id','=',$project->id)->get(); ?>
                    <tr class="parent" id={{ "\"".$project->id."\"" }}>
                        <td><span class="btn btn-block btn-default">{{$project->name}}</span></td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->created_at}}</td>
                        <td>
                            {{ HTML::linkRoute('project.edit', 'Edit', $project->id, array('class' => 'btn btn-sm btn-default'))}}
                        </td>
                        <td>
                            {{ Form::open(array('route' => array('project.destroy', $project->id), 'method' => 'delete')) }}
                            {{ Form::submit('Remove', array('class'=>'btn btn-sm btn-default'))}}
                            {{ Form::close() }}
                        </td>
                    </tr> <!-- trow1 -->
                    <tr class="{{"child-".$project->id}} initiallyHidden">
                        <td class='table-white-space' rowspan={{count($users)+2}}></td>
                        <th>Name</th>
                        <th>Email</th>
                        <th colspan="2">options</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr class="{{"child-".$project->id}} initiallyHidden">
                            <td>{{$user->first_name." ".$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td colspan="2" class="text-right">
                                {{HTML::linkRoute('admin_user_evals','Evals', $user->id, array('class' => 'btn btn-xs btn-block btn-default table-btn-bottom-offset'))}}
                                {{HTML::linkRoute('user.edit','Edit',$user->id, array('class' => 'btn btn-default btn-xs btn-block table-btn-bottom-offset'))}}        
                                {{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'delete')) }}
                                {{ Form::submit('Remove', array('class'=>'btn btn-default btn-xs btn-block table-btn-top-offset'))}}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                        <tr class="{{"child-".$project->id}} initiallyHidden">
                            <td class='table-white-space' colspan=3></td>
                            <td class="text-center">{{HTML::linkRoute('user.create','add', NULL, array('class' => 'btn btn-sm btn-default'))}}</td>
                        </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
<!-- <div class="container admin-container">
    <ul class="nav nav-tabs">
        <li><a href="#manage" data-toggle="tab">Manage Groups and Users</a></li>
        <li><a href="#eval" data-toggle="tab">View Evaluations</a></li>
        <li><a href="#question" data-toggle="tab">Create New Questions</a></li>
    </ul>
    <div class="tab-content container"> -->
        <!-- Manage Groups and Users tab -->
<!-- manage -->

        <!-- Evaluations page -->
<!--         <div id="eval" class="tab-pane">
            <div class="row">
                <div class="col-xs-2 panel-group" id="accordion">
                    <?php $panelNum=0; 
                                $projects = Project::all();
                    ?>
                    @if($projects != null)
                        @foreach($projects as $project) 
                        <?php ++$panelNum; ?>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href=<?php echo("\"#collapse".$panelNum."\""); ?>>
                                            {{$project->name}}
                                    </a>
                                </h4>
                            </div>
                            <div id=<?php echo("\"collapse".$panelNum."\""); ?> class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php $students = User::all()?>
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
                    @endif
                </div>
                <?php $mostRecentEvalDate = Evaluation::max('created_at');
                                $evaluation = Evaluation::where('created_at', $mostRecentEvalDate)->first();
                        ?> 
                <?php $mostRecentAnswerDate = Answer::max('created_at');
                                $answer = Answer::where('created_at', $mostRecentAnswerDate)->first();
                        ?>
                @if($evaluation!=null && $answer!=null)   
                    <table class="table table-bordered table-groups pull-right">
                        
                        <tr>
                            <td>{{$evaluation->q1}}</td>
                            <td>{{$answer->ans1}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q2}}</td>
                            <td>{{$answer->ans2}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q3}}</td>
                            <td>{{$answer->ans3}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q4}}</td>
                            <td>{{$answer->ans4}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q5}}</td>
                            <td>{{$answer->ans5}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q6}}</td>
                            <td>{{$answer->ans6}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q7}}</td>
                            <td>{{$answer->ans7}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q8}}</td>
                            <td>{{$answer->ans8}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q9}}</td>
                            <td>{{$answer->ans9}}</td>
                        </tr>
                        <tr>
                            <td>{{$evaluation->q10}}</td>
                            <td>{{$answer->ans10}}</td>
                        </tr>
                        <tr>
                            <td>Comments</td>
                            <td>{{$answer->comment}}</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div> --><!-- eval -->

        <!-- Questions page -->
<!--         <div id="question" class="tab-pane">
            {{ Form::open(        
                 array('url' => URL::route('newEval'),
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
                    {{ Form::submit('Create Evaluation', array('class'=>'btn btn-default')) }}
                </div>
            {{ Form::close() }}
        </div> --><!-- question -->
    <!-- </div> --><!-- tab-content -->
<!-- </div> --><!-- container -->
@stop
