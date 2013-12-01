<?php

class ProjectGroup extends Eloquent {
    protected $guarded = array('id');
    protected $fillable = array('name', 'description');
}