<?php

use Illuminate\Database\Migrations\Migration;

class AddEidFieldToAnswers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('answers', function($table)
		{
			$table->integer('eid')->after('id');
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
			$table->dropColumn('eid');
		});	
	}

}