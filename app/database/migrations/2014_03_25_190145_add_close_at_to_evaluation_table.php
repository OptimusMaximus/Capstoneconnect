<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCloseAtToEvaluationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evaluations', function(Blueprint $table)
		{
			$date = Carbon::now();
			$date->addWeeks(2);
			$table->dateTime('close_at')->default($date);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evaluations', function(Blueprint $table)
		{
			 $table->dropColumn('close_at');
		});
	}

}