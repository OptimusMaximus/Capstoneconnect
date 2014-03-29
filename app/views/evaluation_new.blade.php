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
$(document).ready(function(){
   $(function() {
        $('tr.parent td')
            .on("click","span.btn", function(){
                var idOfParent = $(this).parents('tr').attr('id');
                $('tr.child-'+idOfParent).toggle('fast');
            });
    });
});
</script>
@stop
@section('header')
New Evaluation
@stop

@section('content')
	{{ Form::open(        
	     array('url' => URL::route('evaluation.store'),
	                'role' => 'form'))}}
	   









<div class="table-responsive">
    <table class="table gamecock-table">
        <thead>
            <tr>
                <th>Add or Remove Questions</th>
               
              
            </tr>
        </thead>
        <tbody>
            <?php $evaluations = Project::all();?>
            
            @if($evaluations != null)
                @foreach($evaluations as $evals)
                    <?php $users = User::where('id','=',$evals->id)->get(); 
                          $pid = $evals->id;
                    ?>
                    <tr class="parent" id={{ "\"".$evals->id."\"" }}>
                        <td><span class="btn btn-block btn-default">{{$evals->q}}</span></td>
                  
                        </td>
                    </tr> <!-- trow1 -->
                    <tr class="{{"child-".$evals->id}} initiallyHidden">
                        <td class='table-white-space' rowspan={{count($users)+2}}></td>
                       
                    </tr>
                   
                        
                @endforeach
            @endif
        </tbody>
       
    </table>















	   <!-- Table Generation -->
	    @for($i = 1; $i <= 10; $i++)

	        <div class="form group">
		        {{ Form::label('q'.$i, 'Question '.$i, array('class' => 'control-label col-sm-2'))}}
		        <div class="col-sm-10">
			        {{ Form::text('q'.$i,'',array('class' => 'form-control', 'placeholder' => 'enter question'))}}
		        </div>
	        </div>
	        <br><br><br>
	    @endfor

	    <!-- For the date selector -->
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