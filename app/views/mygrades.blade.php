@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

	
@stop
@section('header')
My Grades
@stop

@section('content')

	
    <div class = QuestionnaireWhite>
You are logged in as: 


<?php $user = Sentry::getUser();
echo $user['email'];

?>

    <div class="table-responsive">

<?php 

$answers = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')->where('answered_about', '=', $user->id)->get();

$evaluations = DB::table('evaluations')->join('answers', 'evaluations.id', '=', 'answers.eid');

?>

<table class="table table-bordered table-groups pull-right">
<tr bgcolor="Black">
                       <td><font color = 'White'>First Name</td>
                       <td><font color = 'White'>Last Name</td>
                       <td><font color = 'White'>Average Evaluation Grade</td>
                       </font>
                       </tr>

@foreach ($answers as $answer)
<?php


$a1 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans1');
$a2 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans2');
$a3 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans3');
$a4 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans4');
$a5 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans5');
$a6 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans6');
$a7 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans7');
$a8 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans8');
$a9 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans9');
$a10 = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans10');
$avg = ($a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a7 + $a8 + $a7 + $a8 + $a9 + $a10)/10;
?>



                        <tr bgcolor="#73000A">
                            <td><font color = 'White'>{{$user->first_name}}</td>
                            <td><font color = 'White'>{{$user->last_name}}</td>
                            <td><font color = 'White'>{{$avg}}</td>
                        </tr>
  
@endforeach  

<?php
?>
</table>
  
  <table class="table">

  </table>
</div>
    </div>
    
@stop
