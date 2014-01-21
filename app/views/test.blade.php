@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')
.BigWhite {
	background-color:#FFFFFF;
	height:1500px;
	width:900px;
	margin: 0 auto;
	border:2px solid;
	border-radius:25px;

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
<h1>Test</h1>
@stop

@section('content')
    	    
 		@foreach($users as $user)
        	<p>{{ $user->email }}</p>
        	<p>{{ $user->first_name}}</p>
    	@endforeach	    
    
@stop