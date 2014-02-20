@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Capstone Connect
@stop

@section('content')
    <?php 
          $userid = 12;
          //$newanswers = Answer::where('answered_by', $userid);
          $newanswers = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')
                        ->where('answered_by', '=', $userid)->get();
          


          $eid = 4;
            $evaluation = DB::table('evaluations')->where('id','=',$eid)->get();
             
          $mostRecentAnswerDate = Answer::max('created_at');
                    $answer = Answer::where('created_at', $mostRecentAnswerDate)->first();
          $evalDates = DB::table('evaluations')->lists('created_at', 'id');
          $users = User::all();

    ?>
    @foreach ($newanswers as $answers)
        <p>1</p>

        
    @endforeach


<!----    @if($users!=null)
        <p>Select a User to pull up his evals.</p>
            <select name = "answered_about" >
                    @foreach($users as $user)
                        <option value = {{$user['id']}}>{{$user['first_name']." ".$user['last_name']}}</option>
                    @endforeach
            </select>
            <br /><br />
    @endif
---->

<!---    @if($evaluation!=null && $answer!=null)   
        @if($evalDates!=null)
         <select name = "evalDates">
              @foreach($evalDates as $evalDate)
                  <option>{{$evalDate}}</option>
              @endforeach
           </select>
        <br /><br />
    @endif

---->
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
    <br><br>
    {{ HTML::linkRoute('evaluation.create', 'Create New Evaluation', NULL, array('class' => 'btn btn-default')) }}
</div>
@stop