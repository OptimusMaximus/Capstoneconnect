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
<h1>Capstone Connect</h1>
@stop

@section('content')
  
	<div class="whitebox""blackbox"></div>

 <div style="position: absolute; top:250px; left:200px;"> 
 	<FONT COLOR="000000">
 		<p>
 			FAQ #1 Blah Blah Blah Blah Blah
 	</FONT>
		</p>
</div>
  


@stop