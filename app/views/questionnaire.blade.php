@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

@stop

@section('header')
Questionnaire
@stop
	 
@section('content')

    	 {{ Form::open(        
         array('url' => route('answer.store'),
              'role' => 'form'))}}

    		<br/>
    		<div class = 'questions'> 
    			
    			<?php 
                $currentUser = Sentry::getUser(); 
                //$userGroup = DB::select('SELECT id, first_name, last_name, project_id FROM users WHERE project_id = '.$currentUser['project_id']);
                $userGroup = User::where('project_id','=',$currentUser->project_id)->get();

                $mostRecentEvalDate = Evaluation::max('created_at');
                $evaluation = Evaluation::where('created_at', $mostRecentEvalDate)->first();
                
                $numOfQuestions = 10;
         		?>

                @if($userGroup!=null)
                    <p><font size ='5'>Select the user you are evaluating</font></p>
                    <select name = "answered_about" >
                        @foreach($userGroup as $users)
                            <option value = {{$users['id']}}>{{$users['first_name']." ".$users['last_name']}}</option>
                        @endforeach
                    </select>
                    <br /><br /><br /><br />
                @endif

         	@if($evaluation!=null)
	         	@for($i = 1; $i<=$numOfQuestions; ++$i)
	         		<?php $question = "q".$i;
	         			  $answer = "ans".$i;?>
	    			<p>{{$evaluation->$question}}</p>	 
	    			
		    		<select name = {{$answer}}>
		  			 	<option>1</option>
		 				<option>2</option>
		 				<option>3</option>
		 				<option>4</option>
		 				<option>5</option>
		 				<option>6</option>
		 				<option>7</option>
		 				<option>8</option>
		 				<option>9</option>
		 				<option>10</option>
					</select>
					<br><br>
				@endfor
			 @endif
             <div class="form-group col-centered">                  
                  {{ Form::textarea('comment', '', 
                    array('class' => 'col-xs-12',
                    'placeholder' => 'Please enter some comments about your fellow group member.'))}}                
            </div>	
            <input type="hidden" name="answered_by" value={{$currentUser['id']}}>
            <input type="hidden" name="eid" value={{$evaluation['id']}}>
    	</div>
    	
    	
    	 <br /> 
       {{ Form::submit('Submit Answers', array('class'=>'btn btn-default'))}}
    {{ Form::close() }}
    
@stop