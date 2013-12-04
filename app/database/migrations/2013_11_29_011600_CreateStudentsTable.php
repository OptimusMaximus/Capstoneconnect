<?php

use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function($table)
		{
			//schema
			$table->increments('id');
			$table->integer('pgid');
			$table->string('first_name',20);
			$table->string('last_name',25);
			$table->string('email',45);
			$table->timestamps();

			//keys
			$table->unique('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}