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
	        {{ Form::submit('Create Evaluation', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Creates evaluation')) }}
	    </div>
	{{ Form::close() }}
@stop