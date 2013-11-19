<?php
 
use App\Models\User;
 
class SentrySeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();
 
        Sentry::getUserProvider()->create(array(
            'email'       => 'admin@sc.edu',
            'password'    => 'admin',
            'first_name'  => 'John',
            'last_name'   => 'Doe',
            'activated'   => 1,
        ));
 
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));
 
        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@sc.edu');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }
 
}