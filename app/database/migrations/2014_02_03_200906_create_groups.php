<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('groups');
		
		Schema::create('groups', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('permissions')->nullable();
			$table->timestamps();

			$table->unique('name');
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
		Schema::drop('groups');
	}

}