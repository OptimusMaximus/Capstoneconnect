<?php

class Announcement extends Eloquent {
    protected $guarded = array('id');
    protected $fillable = array('announcement');
}