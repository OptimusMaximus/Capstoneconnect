<?php

use Illuminate\Database\Migrations\Migration;

class Throttle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('throttle')
		{
			$table->bigIncrement('id');
			$table->bigInteger('user_id');
			$table->string('ip_address')->nullable()->default(NULL);
			$table->bigInteger('attempts')->default(0);
			$table->smallInteger('suspended')->default(0);
			$table->smallInteger('banned')->default(0);
			$table->timestamp('last_attempt_at')->nullable()->default(NULL);
			$table->timestamp('suspended_at')->nullable()->default(NULL);
			$table->timestamp('banned_at')->nullable()->default(NULL);

			$table->primary('id');
			$table->foreign('user_id')->references('id')->on('users');
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