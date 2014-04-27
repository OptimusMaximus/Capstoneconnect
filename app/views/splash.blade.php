@extends('layouts.masterlogin')
<!-- This is the splash page that contains the video and links on the /welcome page -->

@section('title')
@parent
@stop

@section('header')

<h1><b>Capstone Connect</b></h1>
@stop

@section('styles')
@stop

@section('content')

<div>
<center>
<!-- iframe for splash page video -->	
<iframe width="640" height="400" src="//www.youtube.com/embed/ZP92cnbHwYU?autoplay=0;vq=hd720;" frameborder="0" allowfullscreen></iframe>
 </div> 
 <div>
 	Created by <a href="https://github.com/OptimusMaximus" target="_blank">Maximus Brandel</a>, 
 	<a href="https://github.com/frankets" target="_blank">Sean Frankett</a>,
 	<a href="https://github.com/nickmknia" target="_blank">Nicholas Keshavarz-Nia</a>,
 	<a href="https://github.com/Bensnorman" target="_blank">Ben Norman</a>, and
 	<a href="https://github.com/skysmith112" target="_blank">Skylar Smith</a>.
 	

@stop