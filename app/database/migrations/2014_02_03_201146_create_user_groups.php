<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('user_groups');
		Schema::create('user_groups', function($table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id');
			$table->bigInteger('group_id');

			$table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_groups');
	}

}