@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Capstone Connect
@stop

@section('content')
    


    <?php 
          //$userid = 2;
          $answers = DB::table('answers')->join('evaluations', 'answers.eid', '=', 'evaluations.id')
                        ->where('answered_by', '=', $userid)->get();

          //$users = User::all();
          $answered_by = DB::table('users')->where('id', '=', $userid)->get();
          $answered_by_user =  $answered_by[0]->first_name.' '.$answered_by[0]->last_name;
    ?>
    
    <p><b><font size ='6'>{{$answered_by_user}}</font></b></p>
    @if ($answers != null)
    @foreach($answers as $answer)
        <?php 
        $evaluation = Evaluation::where('id','=', $answer->eid)->first();
        $answered_about = DB::table('users')->where('id', '=', $answer->answered_about)->get();
        $answered_about_user = $answered_about[0]->first_name.' '.$answered_about[0]->last_name;
        
        ?>
        <table class="table table-bordered table-groups pull-right">
                
                <p>Evalutation {{$evaluation->close_at->toFormattedDateString()}} for {{$answered_about_user}}</p>
                
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
        <br /><br />
        @endforeach
        @else
        <p>This user has no evaluations filled out about them.</p>
        @endif
    <br><br>
    
</div>
@stop