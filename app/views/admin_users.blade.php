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
<div class="table-responsive">
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
                    <?php $users = User::where('project_id','=',$project->id)->get(); 
                          $pid = $project->id;
                    ?>
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
<<<<<<< HEAD
                                {{HTML::linkRoute('admin_user_evals','Evaluations', $user->id, array('class' => 'btn btn-xs btn-block btn-default table-btn-bottom-offset' , 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'View specific user evaluations'))}}
=======
                                {{HTML::linkRoute('admin_evals_about','Evals For', $user->id, array('class' => 'btn btn-xs btn-block btn-default table-btn-bottom-offset'))}}
                                {{HTML::linkRoute('admin_user_evals','Evals By', $user->id, array('class' => 'btn btn-xs btn-block btn-default table-btn-bottom-offset'))}}
>>>>>>> master
                                {{HTML::linkRoute('user.edit','Edit',$user->id, array('class' => 'btn btn-default btn-xs btn-block table-btn-bottom-offset'))}}        
                                {{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'delete')) }}
                                {{ Form::submit('Remove', array('class'=>'btn btn-default btn-xs btn-block table-btn-top-offset'))}}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                        <tr class="{{"child-".$project->id}} initiallyHidden">
                            <td class='table-white-space' colspan=3></td>
                            <td>
                                {{ Form::open(array('route' => array('project.user.create', $project->id), 'method' => 'get')) }}
                                {{ Form::submit('add', array('class'=>'btn btn-default btn-sm'))}}
                                {{ Form::close() }}
                            </td>
                            <!-- <td class="text-center">{{HTML::linkRoute('user.create','add', NULL , array('class' => 'btn btn-sm btn-default'))}}</td> -->
                        </tr>
                @endforeach
            @endif
        </tbody>
        <tr>
            <td colspan=4 class="table-white-space"></td>
            <td>
                {{HTML::linkRoute('project.create','Add Project', NULL, array('class' => 'btn btn-default btn-sm'))}}        
            </td>
        </tr>
    </table>
</div>
@stop
