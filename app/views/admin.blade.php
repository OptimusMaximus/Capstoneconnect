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
    <div class="tab-content">
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
            <br>
            <form class="form-horizontal">
                <h5>Add New User</h5>
                <hr>
                <fieldset>
                    <!-- Full Name input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Name">Full Name&nbsp;</label>  
                      <div class="col-md-4">
                        <input id="Name" name="Name" placeholder="John Doe" class="form-control input-md" type="text">
                      </div>
                    </div>
                    <!-- Name input-->
                    <div class="form-group">
                          <label class="col-md-4 control-label" for="Email">Email Address&nbsp;</label>  
                      <div class="col-md-4">
                          <input id="Email" name="Email" placeholder="doej3@email.sc.edu" class="form-control input-md" type="text">    
                      </div>
                    </div>
                    <br>
                   <!-- Add User Submit Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Submit"></label>
                      <div class="col-md-4">
                        <button id="Submit" name="Submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                </fieldset>
                <br>
                <br>
                <h5>New Group</h5>
                <hr>
                <fieldset>
                    <!-- Group Name input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Name">Group Name&nbsp;</label>  
                        <div class="col-md-4">
                            <input id="Name" name="Name" placeholder="John Doe" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Discription input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Discriptioin">Discription&nbsp;</label>  
                        <div class="col-md-4">
                          <input id="Discription" name="Discription" class="form-control input-lg" type="text">    
                        </div>
                    </div>
                    <br>
                    <!-- Group Discription -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Description">Description&nbsp;</label>
                        <div class="col-md-4">                     
                            <textarea class="form-control" id="Description" name="Description"></textarea>
                        </div>
                    </div>
                    <br>
                    <!--Group Submit Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Submit"></label>
                        <div class="col-md-4">
                            <button id="Submit" name="Submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div><!-- manage -->

        <div id="eval" class="tab-pane">
        </div><!-- eval -->

        <div id="question" class="tab-pane">

        </div><!-- question -->
    </div><!-- tab-content -->
</div><!-- container -->

<!-- <div class="container">
    <ul class = "nav nav-tabs tool-bar">
        <li class = "active"> <a href="#manageUsers" data-toggle="tab">Manage Groups and Users</a> </li>
        <li> <a href="#viewEvaluations" data-toggle="tab">View Evaluations</a> </li>
        <li> <a href="#createQuestions" data-toggle="tab">Create New Questions</a> </li>
    </ul>
    <div class="tab-content tool-box">
        <div id="manageUsers" class="tab-pane active">
            <div class="responsive-table">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Date Created</td>
                        <td>Edit</td>
                        <td>Remove</td>
                    </tr>
                    <tr>
                        <td>blah2</td>
                        <td>blah2</td>
                    </tr>
                    <tr>
                        <td>blah3</td>
                        <td>blah3</td>
                    </tr>
                </table>
            </div>
            <br>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <h5><u>Add New User</u></h5>
                    <label for="inputName" class="control-label">Full Name:&nbsp;</label> 
                    <div>
                        <input type="text" class="form-control" id="inputName" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label">Email Address:&nbsp;</label> 
                    <div>
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div><h5><u>Create New Group</u></h5><br></div>
                    Group Name: <input type="text" name="groupName"><br>
                    Description: <input type="text" name="description"><br>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <div id="viewEvaluations" class="tab-pane">
        </div>
        <div id="createQuestions" class="tab-pane">

        </div>
    </div>
</div> -->
@stop
