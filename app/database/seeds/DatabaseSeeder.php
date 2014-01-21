<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SentrySeeder');
        $this->command->info('Sentry tables seeded!');
 
		// $this->call('UserTableSeeder');
		$this->call('ProjectGroupsTableSeeder');
		$this->command->info('ProjectGroups table seeded!');

		$this->call('StudentsTableSeeder');
		$this->command->info('Students table seeded!');
	}

}