@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Capstone Connect
@stop

@section('content')
    @foreach($groups as $group)
        <p>{{$group->name}}</p>
    @endforeach
@stop