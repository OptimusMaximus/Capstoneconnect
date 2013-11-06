@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')
.whitebox{
	background-color:#FFFFFF;
	height:600px;
	width:900px;	
	margin: 0 auto;
}
 .blackbox{
 	background-color:#FFFFFF;
 	height:400px;
 	width:700px;
 	border:2px solid black;
 	margin: 125px;
}


@stop

@section('header')
<h1>Frequently Asked Questions</h1>
@stop

@section('content')
  
<div class="whitebox">
	<div style="float:left; padding-top:50px;"> 
 	<FONT COLOR="000000">
 		<p>
 			FAQ #1: Enter Question Here
 			<br /><br />
 			FAQ #3: Enter Question Here
 			<br /><br />
 			FAQ #4: Enter Question Here
 			<br /><br />
 			FAQ #5: Enter Question Here
 			<br /><br />
 			FAQ #6: Enter Question Here
 	</FONT>
		</p>
	</div>

</div>

 
  


@stop