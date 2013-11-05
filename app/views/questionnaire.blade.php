@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')
.BigWhite {
	background-color:#FFFFFF;
	height:600px;
	width:900px;
	margin: 0 auto;

}

.insideBigWhite {
	background-color: #FCFCFC;
	color: #000000;
	height: 650px;
	width: 1400px;
	position: absolute;
	left: 50px; {{--30px from left of bigWhite --}}
	top: 25px; {{-- 5px from top of bigWhite --}}
	}

.questions{
	background-color: #FFFFFF;
	color: #000000;
	text-align: left;
	height: 500;
	width: 1200
	postion: absolute;
	left: 20px; {{-- 20px from left of insideBigWhite --}}
	top: 25px; {{-- 25px from top of insideBigWhite --}}
}

.radio-inline {
	width:900px;

}

.form-control {
	margin-left: 50px;
	width: 600px;
}

.linkNextQ {
	background-color: #FFFFFF;
	height: 50px;
	width: 200px;
	 
	left: 50px; {{-- 50px from left of questions --}}
	top: 600px; {{-- 600px from top of questions --}}
	
}

	a.blue:link {color:#0000FF}      /* unvisited link color blue */
    a.blue:visited {color:#0000FF}  /* visited link color blue*/
    a.blue:hover {color:rgb(95,87,79);}  /* mouse over link color Pluff mud*/
    a.blue:focus {color:rgb(95,87,79);}  /* link of focus color Pluff mud*/
    a.blue:active {color:rgb(178,180,179);}  /* selected link color State House Gray*/

@stop

@section('header')
<h1>Questionnaire</h1>
@stop

@section('content')
    <div class = BigWhite>
    	 
    		<h1>Group Member Questionnaire</h1>
    		<div class = questions> 
    			<p>Question 1</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
    			<p>Question 2</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 3</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 4</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 5</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 6</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 7</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 8</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 9</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
				<p>Question 10</p>	
    			<label class="radio-inline">
 			    <input type="radio" id="inlineRadio1" value="option1"> 1
 			    <input type="radio" id="inlineRadio1" value="option1"> 2
 			    <input type="radio" id="inlineRadio1" value="option1"> 3
 			    <input type="radio" id="inlineRadio1" value="option1"> 4
 			    <input type="radio" id="inlineRadio1" value="option1"> 5
 			    <input type="radio" id="inlineRadio1" value="option1"> 6
 			    <input type="radio" id="inlineRadio1" value="option1"> 7
 			    <input type="radio" id="inlineRadio1" value="option1"> 8
 			    <input type="radio" id="inlineRadio1" value="option1"> 9
 			    <input type="radio" id="inlineRadio1" value="option1"> 10
				</label>
				<textarea class="form-control" rows="3" placeholder="Comments go here"></textarea>
    		<div class = linkNextQ>
    			<a href="#NextQuestionnaire" class = "blue" target="_blank">Proceed to next evaluation</a>
    		</div>
    	</div>
    		
    	
    </div>
    
@stop