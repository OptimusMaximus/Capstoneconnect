@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')
.bigWhite {
	background-color: #FFFFFF;
	{{--height: 600px;
	width: 900px;--}}
	height: 50%;
	width: 60%;
	margin: 0 auto;
	}

.insideBigWhite {
	background-color: #AAAAAA;
	{{-- height: 500px;
	width: 800px; --}}
	height: 80%;
	width 50%;
	margin: 0px 20px 0px 20px;
	}

@stop

@section('header')
<h1>Questionnaire</h1>
@stop

@section('content')
    <div class = bigWhite>
    	<p> Hello!</p>
    </div>
    
@stop