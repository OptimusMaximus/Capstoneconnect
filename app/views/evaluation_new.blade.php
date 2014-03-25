@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
New Evaluation
@stop

@section('content')
	{{ Form::open(        
	     array('url' => URL::route('newEval'),
	                'role' => 'form'))}}
	    @for($i = 1; $i <= 10; $i++)
	        <div class="form group">
	        {{ Form::label('q'.$i, 'Question '.$i,
	             array('class' => 'control-label'))}}
	        {{ Form::text('q'.$i,'',
	             array('class' => 'form-control',
	                         'placeholder' => 'enter question'))}}
	        
	        
	        </div>
	    @endfor
	    <div class="form group">
	        {{ Form::submit('Create Evaluation', array('class'=>'btn cc-btn-primary', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to create a new evaluation')) }}
	    </div>
	{{ Form::close() }}
@stop