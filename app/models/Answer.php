<?php 

class Answer extends Eloquent {
	protected $guarded = array('id');
    protected $fillable = array('eid','answered_by','answered_about', 'ans1', 'ans2', 'ans3', 'ans4', 'ans5', 'ans6', 'ans7', 'ans8', 'ans9', 'ans10', 'comment');

    // public function user()
    // {
    //     return $this->belongsTo('User', 'answered_about');
    // }
}