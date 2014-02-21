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
User: 


<?php $user = Sentry::getUser();
echo $user['email'];

?>

    <div class="table-responsive">

<?php 

$answers = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')->where('answered_about', '=', $user['id'])->get();
//$sql = "select avg(ans1+ans2+ans3+ans4+ans5+ans6+ans7+ans8+ans9+ans10) from answers a, evaluations e where a.eid=e.id AND a.answered_about=$user";

?>

      <table class="table table-bordered table-groups pull-right">
            <tr bgcolor="Black">
                       <td><font color = 'White'>Evaluation #</td>
                       <td><font color = 'White'>Created at</td>
                       <td><font color = 'White'>Average Evaluation Grade</td>
                       </font>
                       </tr>

@foreach ($answers as $answer)
<?php

$submitted_at = DB::table('answers')->select('created_at')->where('id','=', $answer->id)->get();
$submitted_time = $submitted_at[0];


$avg = ($answer->ans1
       +$answer->ans2
       +$answer->ans3
       +$answer->ans4
       +$answer->ans5
       +$answer->ans6
       +$answer->ans7
       +$answer->ans8
       +$answer->ans9
       +$answer->ans10)/10;

?>
   <tr bgcolor="#73000A">
                            <td><font color = 'White'>{{$answer->eid}}</td>
                            <td><font color = 'White'>{{$submitted_time->created_at}}</td>
                            <td><font color = 'White'>{{$avg}}</td>
                        </tr>
@endforeach  




        </table>
  
 
      </div>
</div>
    
@stop
