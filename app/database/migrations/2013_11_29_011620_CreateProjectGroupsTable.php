<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_groups',function($table)
		{
			$table->increments('id');
			$table->string('name',25);
			$table->string('description');
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
		Schema::drop('project_groups');
	}

}