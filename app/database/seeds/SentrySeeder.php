<?php
 
use App\Models\User;
 
class SentrySeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();
 
        # Unsafe
        Sentry::getUserProvider()->create(array(
            'email'       => 'mccants@cec.sc.edu',
            'password'    => 'capstone@1',
            'first_name'  => 'Dale',
            'last_name'   => 'McCants',
            'activated'   => 1,
            'project_id' => 0,
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
        $adminUser  = Sentry::getUserProvider()->findByLogin('mccants@cec.sc.edu');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);

       /* Sentry::getUserProvider()->create(array(
            'email'       => 'gandalfg@sc.edu',
            'project_id'  => '1',
            'password'    => 'flyyoufools',
            'first_name'  => 'Gandalf',
            'last_name'   => 'Grey',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'frodob@sc.edu',
            'project_id'  => '1',
            'password'    => 'shire',
            'first_name'  => 'Frodo',
            'last_name'   => 'Baggins',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'aragorn@sc.edu',
            'project_id'  => '1',
            'password'    => 'myblade',
            'first_name'  => 'Aragorn',
            'last_name'   => 'Arathorn',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'legolas@sc.edu',
            'project_id'  => '1',
            'password'    => 'mybow',
            'first_name'  => 'Legolas',
            'last_name'   => 'Thrandull',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'gimli@sc.edu',
            'project_id'  => '1',
            'password'    => 'myaxe',
            'first_name'  => 'Gimli',
            'last_name'   => 'Durin',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'xavier@sc.edu',
            'project_id'  => '2',
            'password'    => 'profx',
            'first_name'  => 'Charles',
            'last_name'   => 'Xavier',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'howlett@sc.edu',
            'project_id'  => '2',
            'password'    => 'wolverine',
            'first_name'  => 'Logan',
            'last_name'   => 'Howlett',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'ororo@sc.edu',
            'project_id'  => '2',
            'password'    => 'storm',
            'first_name'  => 'Ororo',
            'last_name'   => 'Munroe',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'summers@sc.edu',
            'project_id'  => '2',
            'password'    => 'cyclops',
            'first_name'  => 'Scott',
            'last_name'   => 'Summers',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'greyj@sc.edu',
            'project_id'  => '2',
            'password'    => 'phoenix',
            'first_name'  => 'Jean',
            'last_name'   => 'Grey',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'stark@sc.edu',
            'project_id'  => '3',
            'password'    => 'ironman',
            'first_name'  => 'Tony',
            'last_name'   => 'Stark',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'rogers@sc.edu',
            'project_id'  => '3',
            'password'    => 'captianamerica',
            'first_name'  => 'Steven',
            'last_name'   => 'Rogers',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'alianovna@sc.edu',
            'project_id'  => '3',
            'password'    => 'blackwidow',
            'first_name'  => 'Natalia',
            'last_name'   => 'Alianovna',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
        Sentry::getUserProvider()->create(array(
            'email'       => 'banner@sc.edu',
            'project_id'  => '3',
            'password'    => 'hulksmash',
            'first_name'  => 'Bruce',
            'last_name'   => 'Banner',
            'activated'   => 1,
            'permissions' => array(
                'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                )
            ));
            */
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Users',
            'permissions' =>  array('users' => 1),
            ));

        /*
        $studentUser = Sentry::getUserProvider()->findByLogin('gandalfg@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('frodob@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('aragorn@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('legolas@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('gimli@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('xavier@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('howlett@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('ororo@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('summers@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('greyj@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('stark@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('rogers@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('alianovna@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        $studentUser = Sentry::getUserProvider()->findByLogin('banner@sc.edu');
        $studentGroup = Sentry::getGroupProvider()->findByName('Users');
        $studentUser->addGroup($studentGroup);
        */
    }
 
}