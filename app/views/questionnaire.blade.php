@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')

@stop

@section('header')
Evaluate Group Member
@stop
	 
@section('content')

    	 {{ Form::open(        
         array('url' => route('answer.store'),
              'role' => 'form'))}}

    		<br/>
    		<div class = 'questions'> 

                @if($groupMemebers!=null)
                    <p><font size ='5'>Select the user you are evaluating</font></p>
                    <select name = "answered_about" >
                        @foreach($groupMembers as $member)
                            <option value = {{$memeber['id']}}>{{$member['first_name']." ".$member['last_name']}}</option>
                        @endforeach
                    </select>
                    <br /><br /><br /><br />
                @endif

         	@if($eval!=null)
	         	@for($i = 1; $i<=$numOfQuestions; ++$i)
	         		<?php $question = "q".$i;
	         			  $answer = "ans".$i;?>
	    			<p>{{$eval->$question}}</p>	 
	    			
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
       {{ Form::submit('Submit Answers', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to submit the evaluation' ))}}
    {{ Form::close() }}
    
@stop