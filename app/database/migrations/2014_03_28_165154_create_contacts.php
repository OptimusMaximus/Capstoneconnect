<?php

use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::dropIfExists('contacts');

		Schema::create('contacts', function($table)
		{
			//scheme
			$table->bigIncrements('id');
			$table->string('contact_email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('contacts');
	}

}