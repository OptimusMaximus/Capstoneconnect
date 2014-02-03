<?php

use Illuminate\Database\Migrations\Migration;

class Groups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('groups', function($table))
		{
			$table->bigIncrements('id');
			$table->string('name');
			$table->mediumText('permissions')->nullable();
			$table->timestamps()->default('0000-00-00 00:00:00');

			$table->primary('id');
			$table->unique('name');
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
		Schema::dropIfExists('groups');
	}

}