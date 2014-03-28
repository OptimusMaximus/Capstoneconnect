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

            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>

            {{ Form:: label ('first_name', 'First Name*' )}}<br />
            {{ Form:: text ('first_name', '' )}}
<br />
            {{ Form:: label ('last_name', 'Last Name*' )}}<br />
            {{ Form:: text ('last_name', '' )}}
<br />
            {{ Form:: label ('phone_number', 'Phone Number' )}}<br />
            {{ Form:: text ('phone_number', '', array('placeholder' => '1234567890')) }}
<br />
            {{ Form:: label ('email', 'E-mail Address*') }}<br />
            {{ Form:: email ('email', '', array('placeholder' => 'me@example.com')) }}
<br />
            {{ Form:: label ('message', 'Message*' )}}<br />
            {{ Form::textarea('message', null, ['size' => '35x7']) }}       


<br />
            {{ Form::reset('Clear', array('class' => 'btn cc-btn-primary')) }}
            {{ Form::submit('Send', array('class' => 'btn cc-btn-primary')) }}

            {{ Form:: close() }}
</body>
</html>
@stop