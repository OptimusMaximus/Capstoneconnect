<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('users_groups');
		Schema::create('users_groups', function($table)
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
		Schema::drop('users_groups');
	}

}