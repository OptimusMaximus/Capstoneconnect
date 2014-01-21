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

    		<br /><br />
    		<div class = questions> <p>Please rate your group members from 1-10 for the following questions with 10 being a perfect group member.</p>
    			<?php $mostRecentEvalDate = Evaluation::max('created_at');
                $evaluation = Evaluation::where('created_at', $mostRecentEvalDate)->first();
         		?>
    			<p>{{$evaluation->q1}}</p>	 
    			
	    		 <select name = "ans1">
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
					<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
					<br>
				

    			<p><br />{{$evaluation->q2}}</p>	
    			<select name = "ans2">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q3}}</p>
    		<select name = "ans3">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q4}}</p>	
    		<select name = "ans4">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q5}}</p>	
    			<select name = "ans5">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q6}}</p>	
    			<select name = "ans6">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q7}}</p>	
    			<select name = "ans7">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q8}}</p>	
    			<select name = "ans8">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				<p><br />{{$evaluation->q9}}</p>	
    			<select name = "ans9">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>--><p>
				<br />{{$evaluation->q10}}</p>	
    			<select name = "ans10">
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
				<!---<textarea class="form-control" rows="3" name="comment" placeholder="Comments go here"></textarea>-->
				
				<br /><br />

             <div class="form-group">  
         
          <div class="col-sm-5" style="padding-left:23%">
            {{ Form::textarea('comment', '', 
              array('class' => 'form-control',
                    'placeholder' => 'Please enter some comments about your fellow group member.'
            ))}}
          </div>
        </div>	
        
    	</div>
    		
    	 <p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    	 	{{ Form::submit('Submit Answers', array('class'=>'btn btn-default'))}}</p>
     {{ Form::close() }}
    </div>
    
@stop