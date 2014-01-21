@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
<h1>Capstone Connect</h1>
@stop

@section('content')
    @foreach($groups as $group)
        <p>{{$group->name}}</p>
    @endforeach
@stop