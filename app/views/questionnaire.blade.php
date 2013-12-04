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

    	{{ Form::open(array('action' => 'UserController@submitQuestionnaire')) }}

    		<h1>Group Member Questionnaire</h1>
    		<div class = questions> 
    			<?php $evaluations = Evaluation::all();?>
    			@foreach ($evaluations as $evaluation)

    			<p>{{$evaluation->q1}}</p>	 
    			
	    			<select name = "answer1">
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

				
					<textarea class="form-control" name="comments1" rows="3" placeholder="Comments go here"></textarea>
					<br>
				

    			<p><br />{{$evaluation->q2}}</p>	
    			<select name = "answer2">
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
				<textarea class="form-control" name="comments2" rows="3" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q3}}</p>
    			<select name = "answer3">
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
				<textarea class="form-control" rows="3" name="comments3" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q4}}</p>	
    		<select name = "answer4">
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
				<textarea class="form-control" rows="3" name="comments4" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q5}}</p>	
    			<select name = "answer5">
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
				<textarea class="form-control" rows="3"name="comments5" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q6}}</p>	
    			<select name = "answer6">
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
				<textarea class="form-control" rows="3" name="comments6" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q7}}</p>	
    			<select name = "answer7">
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
				<textarea class="form-control" rows="3" name="comments7" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q8}}</p>	
    			<select name = "answer8">
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
				<textarea class="form-control" rows="3" name="comments8" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q9}}</p>	
    			<select name = "answer9">
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
				<textarea class="form-control" rows="3" name="comments9" placeholder="Comments go here"></textarea>
				<p><br />{{$evaluation->q10}}</p>	
    			<select name = "answer10">
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
				<textarea class="form-control" rows="3" name="comments10" placeholder="Comments go here"></textarea>
				<br /><br />

    			<!--<button type="Submit" class="btn btn-primary">Submit</button>
    -->
		@endforeach
    	</div>
    		
    	 <p>{{ Form::submit('submit') }}</p>
     {{ Form::close() }}
    </div>
    
@stop