@extends('layouts.master')

@section('title')
@parent
@stop
@section('styles')

@stop

@section('header')
Contact
@stop

@section('content')

<html>
<body>
<!-- Blade Template engine -->
 {{ Form:: open(array('url' => 'contact_request')) }} <!--contact_request is a router from Route class-->
<div class="form-group">
            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>

            {{ Form:: label ('first_name', 'First Name*' )}}<br />
            {{ Form:: text ('first_name', '', array('placeholder' => 'John')) }}
<br />
            {{ Form:: label ('last_name', 'Last Name*' )}}<br />
            {{ Form:: text ('last_name', '', array('placeholder' => 'Doe')) }}
<br />
            {{ Form:: label ('phone_number', 'Phone Number' )}}<br />
            {{ Form:: text ('phone_number', '', array('placeholder' => '1234567890')) }}
<br />
            {{ Form:: label ('email', 'E-mail Address*') }}<br />
            {{ Form:: email ('email', '', array('placeholder' => 'me@example.com')) }}
<br />
            {{ Form:: label ('message', 'Message*' )}}<br />
              <div class="form-group col-centered">                  
            {{ Form::textarea('message', '', array('class' => 'col-xs-12','placeholder' => 'Please enter a message to your professor'))}}                
            </div>
            <b>*</b> indicates required feild
            
<br />
<br />

            {{ Form::reset('Clear', array('class' => 'btn cc-btn-primary')) }}
            {{ Form::submit('Send', array('class' => 'btn cc-btn-primary')) }}

            {{ Form:: close() }}
</div>            
</body>
</html>
@stop