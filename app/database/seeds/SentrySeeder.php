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
            'email'       => 'user1a@sc.edu',
            'project_id'  => '1',
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
        Sentry::getUserProvider()->create(array(
            'email'       => 'user1b@sc.edu',
            'project_id'  => '1',
            'password'    => 'usertest',
            'first_name'  => 'User1b',
            'last_name'   => 'B',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user1c@sc.edu',
            'project_id'  => '1',
            'password'    => 'usertest',
            'first_name'  => 'User1c',
            'last_name'   => 'C',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user2a@sc.edu',
            'project_id'  => '2',
            'password'    => 'usertest',
            'first_name'  => 'User2a',
            'last_name'   => 'A',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user2b@sc.edu',
            'project_id'  => '2',
            'password'    => 'usertest',
            'first_name'  => 'User2b',
            'last_name'   => 'B',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user2c@sc.edu',
            'project_id'  => '2',
            'password'    => 'usertest',
            'first_name'  => 'User2c',
            'last_name'   => 'C',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user3a@sc.edu',
            'project_id'  => '3',
            'password'    => 'usertest',
            'first_name'  => 'User3a',
            'last_name'   => 'A',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user3b@sc.edu',
            'project_id'  => '3',
            'password'    => 'usertest',
            'first_name'  => 'User3b',
            'last_name'   => 'B',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'user3c@sc.edu',
            'project_id'  => '3',
            'password'    => 'usertest',
            'first_name'  => 'User3c',
            'last_name'   => 'C',
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
        $studentUser = Sentry::getUserProvider()->findByLogin('user1a@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user1b@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user1c@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user2a@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user2b@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user2c@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user3a@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user3b@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('user3c@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
    }
 
}