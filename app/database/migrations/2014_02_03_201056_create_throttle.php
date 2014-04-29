<?php

use Illuminate\Database\Migrations\Migration;

class CreateThrottle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('throttle');

		Schema::create('throttle', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id')->unsigned();
			$table->string('ip_address')->nullable()->default(NULL);
			$table->bigInteger('attempts')->default(0);
			$table->smallInteger('suspended')->default(0);
			$table->smallInteger('banned')->default(0);
			$table->timestamp('last_attempt_at')->nullable()->default(NULL);
			$table->timestamp('suspended_at')->nullable()->default(NULL);
			$table->timestamp('banned_at')->nullable()->default(NULL);

			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('cascade');
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
		Schema::drop('throttle');
	}

}