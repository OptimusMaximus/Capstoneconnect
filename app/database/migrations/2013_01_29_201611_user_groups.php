<?php

use Illuminate\Database\Migrations\Migration;

class UserGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_groups', function($table))
		{
			$table->bigIncrement('id');
			$table->bigInteger('user_id');
			$table->bigInteger('group_id');

			$table->primary('id');
			$table->engine = 'InnoDB';
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}