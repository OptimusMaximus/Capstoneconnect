<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers',function($table)
		{
			//scheme
			$table->increments('id');
			$table->integer('answered_by');
			$table->integer('answered_about');
			$table->string('ans1');
			$table->string('ans2');
			$table->string('ans3');
			$table->string('ans4');
			$table->string('ans5');
			$table->string('ans6');
			$table->string('ans7');
			$table->string('ans8');
			$table->string('ans9');
			$table->string('ans10');
			$table->text('comment');
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
		Schema::drop('answers');
	}

}