@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

@stop

@section('header')
<h1>Average Grades</h1>
@stop
	 
@section('content')

    <div class = AllGradesWhite>

<?php $user = Sentry::getUser();
//Finds the current user ^^^
//echo $user['email'];

?>
<p><font size ='5'>Average Grade per User</font></p>
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
                  
                   <td> <font color="White">Average Grade</td></font>
        
   


           
                       </tr>

                      
@foreach ($users as $user)



<?php
//Current solutuion to the questionaire.
//$temp = DB::table('answers')->join('users', 'answers.answered_about', '=', 'users.id')
  //  ->avg('ans1', 'ans2')->where('users.id','=',$user->id)->get();
//$price = DB::table('answers')->where('answered_about', '=', $user->id)->avg('ans1', 'ans2', 'ans3', 'ans4');


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
$avg = ($a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10)/10;   //Averages all a1-a10
?>
   

                        <tr bgcolor="#73000A">
                            <td><font color="White">{{$user->first_name}}</td>
                            <td><font color="White">{{$user->last_name}}</td>
                            <td><font color="White">{{$user->email}}</td>
                            <td><font color="White">{{$avg}}</td>  
                        </tr>
@endforeach  


</table>
  
  <table class="table">

  </table>
</div>
    </div>
    
@stop
