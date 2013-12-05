<?php 

class Answer extends Eloquent {
	protected $guarded = array('id');
    protected $fillable = array('ans1', 'ans2', 'ans3', 'ans4', 'ans5', 'ans6', 'ans7', 'ans8', 'ans9', 'ans10', 'comment');
}