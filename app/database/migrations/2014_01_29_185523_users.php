<?php

use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table))
		{
			$table->bigIncrement('id');
			$table->bigInteger('project_id');
			$table->string('email');
			$table->string('password');
			$table->mediumText('permissions')->nullable();
			$table->smallInteger('activated')->default(0);
			$table->string('activation_code')->nullable()->default(NULL);
			$table->string('activated_at')->nullable()->default(NULL);
			$table->string('last_login')->nullable()->default(NULL);
			$table->string('persist_code')->nullable();
			$table->string('reset_password_code')->nullable()->default(NULL);
			$table->string('first_name')->nullable()->default(NULL);
			$table->string('last_name')->nullable()->default(NULL);
			$table->timestamps()->default('0000-00-00 00:00:00');

			$table->primary('id');
			$table->unique('email');
			$table->index('activation_code');
			$table->index('reset_password_code');

			$table->foreign('project_id')->references('id')->('projects');
			$table->engine = 'InnoDB';
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}