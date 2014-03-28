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
New Evaluation
@stop

@section('content')
	{{ Form::open(        
	     array('url' => URL::route('evaluation.store'),
	                'role' => 'form'))}}
	   
<!--Code to manupulate for add and remove button
<script type="text/javascript">
    $(document).ready(function(){
        $counter = 0; // initialize 0 for limitting textboxes
        $('#buttonadd').click(function(){
            if ($counter < 10)
            {
                $counter++;
                $('#buttondiv').append('<div><label>Textbox #'+$counter+'</label><input type="text" name="textbox[]" class="textbox" value="" /></div>');
            }else{
                alert('You cannot add more than 10 textboxes');
            }
        });

        $('#buttonremove').click(function(){
            if ($counter){
                $counter--;
                $('#buttondiv .textbox:last').parent().remove(); // get the last textbox and parent for deleting the whole div
            }else{
                alert('No More textbox to remove');
            }
        });

        $('#buttonget').click(function(){
            alert($('.textbox').serialize()); // use serialize to get the value of textbox
        });

        $('#dropdownadd').change(function(){
            $('#dropdowndiv').html(""); // when the dropdown change set the div to empty
            $loopcount = $(this).val(); // get the selected value
            for (var i = 1; i <= $loopcount; i++)
            {
                $('#dropdowndiv').append('<div><label>Textbox #'+i+'</label><input type="text" name="textbox2[]" class="textbox2" value="" /></div>');
            }
        });
    });
</script>

-->

	    @for($i = 1; $i <= 10; $i++)
	        <div class="form group">
		        {{ Form::label('q'.$i, 'Question '.$i, array('class' => 'control-label col-sm-2'))}}
		        <div class="col-sm-10">
			        {{ Form::text('q'.$i,'',array('class' => 'form-control', 'placeholder' => 'enter question'))}}
		        </div>
	        </div>
	        <br><br><br>
	    @endfor
	    <div class="form group">
	    	{{ Form::label('close_at', 'Closing Date', array('class' => 'control-label col-sm-2')) }}
	    	<div class="col-sm-3 col-offset-sm-8">
	    		{{ Form::text('close_at','',array('class' => 'form-control', 'id' => 'date'))}}
	    	</div>
	    	<br><br><br>
	    <div class="form group">
	        {{ Form::submit('Create Evaluation', array('class'=>'btn btn-default', 'data-toggle' => 'tooltip','data-placement' => 'top', 'title' => 'Click here to create a new evaluation')) }}
	    </div>
	{{ Form::close() }}
	<script>$('#date').datepicker();</script>
@stop