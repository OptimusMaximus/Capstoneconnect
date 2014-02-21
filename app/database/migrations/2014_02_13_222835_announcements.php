<?php

use Illuminate\Database\Migrations\Migration;

class Announcements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::dropIfExists('announcements');

		Schema::create('announcements', function($table)
		{
			//scheme
			$table->bigIncrements('id');
			$table->string('announcement');
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
		Schema::drop('announcements');
	}

}