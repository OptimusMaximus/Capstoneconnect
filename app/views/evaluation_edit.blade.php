@extends('layouts.master')

@section('title')
@parent
@stop
@section('stylesheets')
{{ HTML::style('css/redmond/jquery-ui-1.10.4.custom.css') }}
@stop
@section('head')
{{ HTML::script('js/jquery-ui-1.10.4.custom.js') }}
@stop
@section('header')
Edit Evaluation
@stop

@section('content')
<!-- this @include is needed for confirmation popup -->
@include('delete_confirm')

	{{ Form::open(        
	     array('url' => URL::route('evaluation.update',$eval->id),
	                'role' => 'form', 'method' => 'patch',
	                'class' => 'form-horizontal'))}}
	    <div class="form-group">
	    	{{Form::label('title', "Title", array('class' => 'control-label col-sm-2'))}}
	    	<div class="col-sm-10">
	    		{{Form::text('title',$eval->title,array('class'=>'form-control', 'placeholder'=>'place title here'))}}
	    	</div>
	    </div>
	    @for($i = 1; $i <= 10; $i++)
	    	<?php $q = 'q'.$i; ?>
	        <div class="form-group">
		        {{ Form::label('q'.$i, 'Question '.$i, array('class' => 'control-label col-sm-2'))}}
		        <div class="col-sm-10">
			        {{ Form::text($q,$eval->$q,array('class' => 'form-control', 'placeholder' => 'enter question'))}}
		        </div>
	        </div>
	    @endfor
	    <div class="form-group">
	    	{{ Form::label('close_at', 'Closing Date', array('class' => 'control-label col-sm-2')) }}
	    	<div class="col-sm-3 col-offset-sm-8">
	    		{{ Form::text('close_at',$eval->close_at,array('class' => 'form-control', 'id' => 'date'))}}
	    	</div>
	    </div>
	    <div class="form-group">
	        {{ Form::submit('Update Evaluation', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to create a new evaluation')) }}
	    </div>
	{{ Form::close() }}
	<br>
	{{Form::open(array('url' => URL::route('evaluation.destroy',$eval->id),
	                'role' => 'form', 'method' => 'delete'))}}
	<!-- Popup with confirmation when submitted -->
    {{ Form::submit('Delete Evaluation', array('class'=>'btn btn-primary', 'type' => 'submit', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 
            'data-title' => "Delete Evaluation?", 'data-message'=> "Are you sure you want to delete this evaluation?", 'data-placement' => 'top', 'title' => 'Click here to delete the evaluation')) }}
      
    {{-- Form::submit('Delete Evaluation', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to create a delete an evaluation')) --}}
    {{Form::close()}}

	<script>$('#date').datepicker();</script>
@stop