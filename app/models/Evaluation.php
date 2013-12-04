<?php

class Evaluation extends Eloquent {
    protected $guarded = array('id');
    protected $fillable = array('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10');
}