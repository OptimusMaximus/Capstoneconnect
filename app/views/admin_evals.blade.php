@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Capstone Connect
@stop

@section('content')
    


    <?php 
          //$newanswers = Answer::where('answered_by', $userid);
          $answers = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')
                        ->where('answered_by', '=', $userid)->get();
          
          
          $users = User::all();

    ?>
    


    @foreach($answers as $answer)
        <?php 
        

        
        $answered_about = DB::table('users')->where('id', '=', $answer->answered_about)->get();
        $answered_by = DB::table('users')->where('id', '=', $answer->answered_by)->get();        


        $answered_about_user = $answered_about[0]->first_name.' '.$answered_about[0]->last_name;
        $answered_by_user = $answered_by[0]->first_name.' '.$answered_by[0]->last_name;
        ?>
        <table class="table table-bordered table-groups pull-right">
                
                <p>{{$answered_by_user}} evaluating on {{$answered_about_user}}</p>
                
            <tr>
                <td>{{$answer->q1}}</td>
                <td>{{$answer->ans1}}</td>
            </tr>
            <tr>
                <td>{{$answer->q2}}</td>
                <td>{{$answer->ans2}}</td>
            </tr>
            <tr>
                <td>{{$answer->q3}}</td>
                <td>{{$answer->ans3}}</td>
            </tr>
            <tr>
                <td>{{$answer->q4}}</td>
                <td>{{$answer->ans4}}</td>
            </tr>
            <tr>
                <td>{{$answer->q5}}</td>
                <td>{{$answer->ans5}}</td>
            </tr>
            <tr>
                <td>{{$answer->q6}}</td>
                <td>{{$answer->ans6}}</td>
            </tr>
            <tr>
                <td>{{$answer->q7}}</td>
                <td>{{$answer->ans7}}</td>
            </tr>
            <tr>
                <td>{{$answer->q8}}</td>
                <td>{{$answer->ans8}}</td>
            </tr>
            <tr>
                <td>{{$answer->q9}}</td>
                <td>{{$answer->ans9}}</td>
            </tr>
            <tr>
                <td>{{$answer->q10}}</td>
                <td>{{$answer->ans10}}</td>
            </tr>
            <tr>
                <td>Comments</td>
                <td>{{$answer->comment}}</td>
            </tr>
        </table>
        @endforeach
    
    <br><br>
    {{ HTML::linkRoute('evaluation.create', 'Create New Evaluation', NULL, array('class' => 'btn btn-default')) }}
</div>
@stop