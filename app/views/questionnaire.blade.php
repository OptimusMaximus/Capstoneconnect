@extends('layouts.master')
<!-- require_once('submit_confirm.php');  
This had to be commented out. If it's uncommented,
it breaks the css for the evaluations page. Seems 
to still work fine without being uncommented.

 -->


@section('title')
@parent
@stop

@section('styles')

@stop

@section('header')
Evaluate Group Member
@stop
@section('content')
<!-- this @include is needed for confirmation popup -->
@include('submit_confirm')

    	 {{ Form::open(        
         array('url' => route('answer.store'),
              'role' => 'form'))}}

    		<br/>
    		<div class = 'questions'> 
                @if($groupMembers!=null)
                    <p><font size ='5'>Select the user you are evaluating</font></p>
                    <select name = "answered_about" >
                        @foreach($groupMembers as $member)
                            <option value = {{$member['id']}}>{{$member['first_name']." ".$member['last_name']}}</option>
                        @endforeach
                    </select>
                    <br /><br /><br /><br />
                @endif

         	@if($eval!=null)
	         	@for($i = 1; $i<=10; ++$i)
	         		<?php $question = "q".$i;
	         			  $answer = "ans".$i;?>
            @if($eval->$question != null)      
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
          @endif
				@endfor
			 @endif
             <div class="form-group col-centered">                  
                  {{ Form::textarea('comment', '', 
                    array('class' => 'col-xs-12',
                    'placeholder' => 'Please enter some comments about your fellow group member.'))}}                
            </div>	
            <input type="hidden" name="answered_by" value={{$currentUser['id']}}>
            <input type="hidden" name="eid" value={{$eval['id']}}>

    	
    	
    	 <br /> 
      {{-- Form::submit('Submit Answers', array('class'=>'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to submit the evaluation' ))--}}
        {{ Form::submit('Submit Answers', array('class'=>'btn cc-btn-primary', 'data-toggle' => "modal", 'data-target'=> "#confirmSubmit", 'data-title'=>"Submit Evaluation?",
                                      'data-message'=>'Are you sure you want to submit this Evaluation?', 'data-placement'=>'top', 'title' => 'Submits Evaluation')) }}

    {{ Form::close() }}
      </div>
    
@stop