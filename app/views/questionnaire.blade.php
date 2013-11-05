@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')
.bigWhite {
	background-color: #FFFFFF;
	height: 700px;
	width: 1500px;
	position: relative;
	margin: 0 auto;
	}

.insideBigWhite {
	background-color: #FFFFFF;
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

.linkNextQ {
	background-color: #FFFFFF;
	height: 50px;
	width: 200px;
	position: absolute;
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
    <div class = bigWhite>
    	<div class = insideBigWhite> 
    		<h1>Group Member Questionnaire</h1>
    		<div class = questions> 
    			<p>Questions go here.</p>	
    			<p>More questions.</p>
    		</div>
    		<div class = linkNextQ>
    			<a href="#NextQuestionnaire" class = "blue" target="_blank">Proceed to next evaluation</a>
    		</div>
    	</div>
    </div>
    
@stop