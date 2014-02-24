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
<?php $users = User::all();
 $evalID = DB::table('evaluations')->lists('id', 'id');
//$grades1 = DB::table('students')->lists('grades1', 'id');

?>

<table class="table table-bordered table-groups pull-right">
 <tr bgcolor="Black">
                   <td><font color="White">First Name</td></font>
                   <td><font color="White">Last Name</td></font>
                   <td><font color="White">Email</td></font>
                  
                   <td> @if($evalID!=null)
        <select name = "Grades" onchange="window.Getgrades()">
        <option label="Grades">Grades</option>
   
        @foreach($evalID as $evalDate)
            <option>Evaluation {{$evalDate}}</option>
        @endforeach
        </select>
        @endif</td>   

           
                       </tr>

                      
<?php foreach ($users as $user)
{?>
   

                        <tr bgcolor="#73000A">
                            <td><font color="White">{{$user->first_name}}</td>
                            <td><font color="White">{{$user->last_name}}</td>
                            <td><font color="White">{{$user->email}}</td>
                            <td><font color="White">{{$user->grades1}}</td>  
                        </tr>
  

<?php
}?>
</table>
  
  <table class="table">

  </table>
</div>
    </div>
    
@stop