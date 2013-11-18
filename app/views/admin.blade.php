@extends('layouts.master')

@section('title')
@parent
@stop

@section('stylesheets')
<link rel="stylesheet" href="css/admin-bootstrap-overwrite.css" />
@stop

@section('styles')
@stop

@section('header')
<h1>Admin Tools</h1>
@stop


@section('content')
<div class="container admin-container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#manage" data-toggle="tab">Manage Groups and Users</a></li>
    <li><a href="#eval" data-toggle="tab">View Evaluations</a></li>
    <li><a href="#question" data-toggle="tab">Create New Questions</a></li>
  </ul>
  <div class="tab-content container">
    <div id="manage" class="tab-pane active">
      <table class="table table-bordered table-responsive table-hover table-groups">
        <tr>
          <td>Name</td>
          <td>Description</td>
          <td>Date Created</td>
          <td>Edit</td>
          <td>Remove</td>
        </tr> <!-- trow1 -->
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        <tr>                        
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr> <!-- trow2 -->
        <tr>                        
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr> <!-- trow3 -->
        <tr>                        
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr> <!-- trow4 -->
        <tr>                        
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr> <!-- trow5 -->
        <br>
      </table>
      <hr>
      <h4><u><b>Add New User</b></u></h4>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label for="fullName" class="col-sm-2 control-label">Full Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="fullName" placeholder="John Doe">
          </div>
        </div>
        <div class="form-group">
          <label for="Email" class="col-sm-2 control-label">Email Address:</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="Email" placeholder="johnd@email.sc.edu">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add Student</button>
          </div>
        </div>
      </form>
      <hr>
      <h4><u><b>Creat New Group</b></u></h4>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label for="groupName" class="col-sm-2 control-label">Group Name:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="groupName" placeholder="Group One">
          </div>
        </div>
        <div class="form-group">
          <label for="Discription" class="col-sm-2 control-label">Group Description:</label>
          <div class="col-sm-5">
            <textarea class="form-control" id="Discription" placeholder="Group description" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add Student</button>
          </div>
        </div>
      </form>
    </div><!-- manage -->
    <div id="eval" class="tab-pane">
      <div class="row">
        <div class="col-xs-2 panel-group" id="accordion">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Group 1
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <button type="button" class="btn btn-default">John Doe</button>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Group 2
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                ro
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Group 3
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                da
              </div>
            </div>
          </div>
        </div>
        <table class="table table-bordered table-groups pull-right">
          <tr>
            <td>fasd</td>
            <td>adsf</td>
            <td>test</td>
          </tr>
          <tr>
            <td>adsf</td>
            <td>dsfa</td>
            <td>dsfa</td>
          </tr>
        </table>
      </div>
      <br>
      <div class="row">
        <table class="table table-bordered table-groups pull-right">
          <tr>
            <td>fasd</td>
            <td>adsf</td>
            <td>test</td>
          </tr>
          <tr>
            <td>adsf</td>
            <td>dsfa</td>
            <td>dsfa</td>
          </tr>
        </table>
      </div>
    </div><!-- eval -->

    <div id="question" class="tab-pane">
    </div><!-- question -->
  </div><!-- tab-content -->
</div><!-- container -->
@stop
