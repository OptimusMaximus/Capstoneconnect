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

$answers = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')->where('answered_about', '=', $user->id)->distinct()->get();
//$sql = "select avg(ans1+ans2+ans3+ans4+ans5+ans6+ans7+ans8+ans9+ans10) from answers a, evaluations e where a.eid=e.id AND a.answered_about=$user";


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
$avg = ($a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7  + $a8  + $a9 + $a10)/10;
?>
  
@endforeach  


                        <tr bgcolor="#73000A">
                            <td><font color = 'White'>{{$user->first_name}}</td>
                            <td><font color = 'White'>{{$user->last_name}}</td>
                            <td><font color = 'White'>{{round($avg,2)}}/10 or {{round($avg*10,2)}}%</td>
                        </tr>



<?php
?>
</table>
  
  <table class="table">

  </table>
</div>
    </div>
    
@stop
