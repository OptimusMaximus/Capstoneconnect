<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('users');
		
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('project_id')->unsigned()->nullable()->default(NULL);
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
			$table->timestamps();

			$table->foreign('project_id')
				->references('id')->on('projects')
				->onDelete('cascade');
			$table->unique('email');
			$table->index('activation_code');
			$table->index('reset_password_code');
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
		Schema::drop('users');
	}

}