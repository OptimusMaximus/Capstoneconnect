@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

@stop

@section('header')
<h1>Questionnaire</h1>
@stop
	 
@section('content')

    <div class = QuestionnaireWhite>
    	 {{ Form::open(        
         array('url' => 'submitAnswers',
              'role' => 'form'))}}

    		<br/><br/>
    		<div class = questions> 
    			<p>Please rate your group members from 1-10 for the following questions with 10 being a perfect group member.</p>
    			<?php $mostRecentEvalDate = Evaluation::max('created_at');
                $evaluation = Evaluation::where('created_at', $mostRecentEvalDate)->first();
                $numOfQuestions = 10;
         		?>
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
             <div class="form-group">  
         
          <div class="col-sm-5" style="padding-left:23%">
            {{ Form::textarea('comment', '', 
              array('class' => 'form-control',
                    'placeholder' => 'Please enter some comments about your fellow group member.'
            ))}}
          </div>
        </div>	
        
    	</div>
    	
    	<!-- This needs to be cleaned up -->
    	 <p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    	 	{{ Form::submit('Submit Answers', array('class'=>'btn btn-default'))}}</p>
     {{ Form::close() }}
    </div>
    
@stop