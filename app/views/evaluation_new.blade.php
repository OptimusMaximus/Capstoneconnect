@extends('layouts.master')

@section('title')
@parent
@stop
@section('stylesheets')
{{ HTML::style('css/redmond/jquery-ui-1.10.4.custom.css') }}
@stop
@section('head')
{{ HTML::script('js/jquery-ui-1.10.4.custom.js') }}
<script>
var questionNum=10;

function make_visable() {
	if(questionNum<=2){
   		var rvbtn = document.getElementById("remove1");
   		rvbtn.style.display="inline";
   	}
	if(questionNum<9){
   		questionNum++;
   	}
   	else{
   		questionNum++;
   		btn = document.getElementById("add1");
   		btn.style.display="none";
   	}
   var e = document.getElementById("question"+questionNum);
   e.style.display = 'block';
}
function hide() {
   var e = document.getElementById("question"+questionNum);
   if(e.style.display != 'none') {
      e.style.display = 'none';
      document.getElementById('frm'+questionNum).value = "";
   	if(questionNum>=10) {
   		var btn = document.getElementById("add1");
   		btn.style.display="inline";
   	}
    if(questionNum>2){
      questionNum--;
    }
    else{
    	questionNum--;
	   	var rvbtn = document.getElementById("remove1");
	   	rvbtn.style.display="none";
   	}

   }
}
</script>
@stop
@section('header')
New Evaluation
@stop

@section('content')
	{{ Form::open(        
	     array('url' => URL::route('evaluation.store'),
	                'role' => 'form',
	                'class' => 'form-horizontal'))}}
        <div class="form-group">
	        {{ Form::label('q1', 'Question 1', array('class' => 'control-label col-sm-2'))}}
	        <div class="col-sm-8">
		        {{ Form::text('q1','',array('class' => 'form-control', 'placeholder' => 'enter question'))}}
	        </div>
        </div>
	    @for($i = 2; $i <= 9; $i++)
	        <div id={{"'question".$i."'"}} class="form-group">
		        {{ Form::label('q'.$i, 'Question '.$i, array('class' => 'control-label col-sm-2'))}}
		        <div class="col-sm-8">
			        {{ Form::text('q'.$i,'',array("id"=>'frm'.$i,'class' => 'form-control', 'placeholder' => 'enter question'))}}
		        </div>
	        </div>
	    @endfor
		    <div id="question10" class="form-group">
		        {{ Form::label('q10', 'Question 10', array('class' => 'control-label col-sm-2'))}}
		        <div class="col-sm-8">
			        {{ Form::text('q'.$i,'',array("id"=>'frm10','class' => 'form-control', 'placeholder' => 'enter question'))}}
		        </div>
	        </div>
	    <div class="form-group">
	    	{{ Form::label('close_at', 'Closing Date', array('class' => 'control-label col-sm-2')) }}
	    	<div class="col-sm-2">
	    		{{ Form::text('close_at','',array('class' => 'form-control', 'id' => 'date'))}}
	    	</div>
	    	<span id="remove1" onclick = "hide();" class="col-sm-offset-1 col-sm-2 btn btn-default">remove question</span>
	    	<span id="add1" onclick = "make_visable();" class="col-sm-2 btn btn-default initiallyHidden">add question</span>
	    </div>
	    <div class="form-group">
	  	</div>
	    <div class="form-group">
	        {{ Form::submit('Create Evaluation', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to create a new evaluation')) }}
	    </div>
	{{ Form::close() }}
	<script>$('#date').datepicker();</script>
@stop