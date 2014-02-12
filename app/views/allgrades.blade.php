@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

@stop

@section('header')
<h1>All Grades</h1>
@stop
	 
@section('content')

    <div class = QuestionnaireWhite>
<?php $user = Sentry::getUser();
echo $user['email'];

?>

    <div class="table-responsive">
<?php $users = User::all();?>

<table class="table table-bordered table-groups pull-right">
 <tr bgcolor="Black">
                       <td>First Name</td>
                       <td>Last Name</td>
                       <td>Email</td>
                       <td>Grades</td>
                       </font>
                       </tr>
<?php foreach ($users as $user)
{?>
   

                        <tr bgcolor="#73000A">
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->grades1}}</td>
                        </tr>
  

<?php
}?>
</table>
  
  <table class="table">

  </table>
</div>
    </div>
    
@stop