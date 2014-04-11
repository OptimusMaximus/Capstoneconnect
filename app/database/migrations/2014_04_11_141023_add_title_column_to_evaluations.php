<?php

use Illuminate\Database\Migrations\Migration;

class AddTitleColumnToEvaluations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("evaluations", function($table)
		{
			$table->string('title')->default('Evaluation');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table("evaluations", function($table)
		{
			$table->dropColumn('title');
		});
	}

}