<?php

use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToAnswers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('answers', function($table)
		{
			$table->foreign('eid')
				->references('id')->on('evaluations')
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
		Schema::table('answers', function($table)
		{
			$table->dropForeign('answers_eid_foreign');
		});
	}

}