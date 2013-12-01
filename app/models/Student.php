<?php

class Student extends Eloquent {

    protected $guarded = array('sid');
    protected $fillable = array('first_name', 'last_name', 'email');
}