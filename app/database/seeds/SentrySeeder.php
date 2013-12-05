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
            'permissions' => array(
                'user.create' => 1,
                'user.delete' => 1,
                'user.view'   => 1,
                'user.update' => 1,
                )
        ));


        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));
 
        // Assign admin to group
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@sc.edu');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);

        Sentry::getUserProvider()->create(array(
            'email'       => 'user@sc.edu',
            'password'    => 'usertest',
            'first_name'  => 'Patrick',
            'last_name'   => 'McG',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'Users',
            'permissions' =>  array('users' => 1),
            ));
        $studentUser = Sentry::getUserProvider()->findByLogin('user@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
 
    }
 
}