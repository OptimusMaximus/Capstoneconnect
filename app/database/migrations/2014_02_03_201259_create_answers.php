<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnswers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('answers');
		
		Schema::create('answers',function($table)
		{
			//scheme
			$table->increments('id');
			$table->unsignedInteger('eid');//unsigned!!
!			$table->unsignedInteger('answered_by');
			$table->unsignedInteger('answered_about');
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


			$table->foreign('answered_about')
				->references('id')->on('users')
				->onDelete('cascade');
			$table->foreign('answered_by')
				->references('id')->on('users')
				->onDelete('cascade');
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