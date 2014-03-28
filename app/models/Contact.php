<?php


class Contact extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'contacts';	
	protected $guarded = array('id');
	protected $fillable = array('contact_email');

}