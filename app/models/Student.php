<?php

class Student extends Eloquent {
    protected $guarded = array('id');
    protected $fillable = array('first_name', 'last_name', 'email');
}