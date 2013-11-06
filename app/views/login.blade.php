@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
<h1>Capstone Connect</h1>
@stop

@section('styles')
.whitebox {
  background-color:#FFFFFF;
  width:500px;
  height:auto;
  margin: 0 auto;
  color:black;
}
@stop

@section('content')
   <form role="form">
  <div class ="whitebox">
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>

  <br /><br />Forgot your password? Click Here

</div>
</form>
@stop