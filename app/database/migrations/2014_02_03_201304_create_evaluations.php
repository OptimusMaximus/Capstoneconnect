<?php

use Illuminate\Database\Migrations\Migration;

class CreateEvaluations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('evaluations');

		Schema::create('evaluations', function($table)
		{
			//scheme
			$table->increments('id');
			$table->string('q1');
			$table->string('q2');
			$table->string('q3');
			$table->string('q4');
			$table->string('q5');
			$table->string('q6');
			$table->string('q7');
			$table->string('q8');
			$table->string('q9');
			$table->string('q10');
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
		Schema::drop('evaluations');
	}

}