<?php
  
class StudentsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('students')->delete();

        Student::create(array('id'=>'',
                              'pgid'=>'1',
                              'first_name'=>'Sam',
                              'last_name'=>'Doe',
                              'email'=>'samdoe@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'1',
                              'first_name'=>'Gandalf',
                              'last_name'=>'Grey',
                              'email'=>'gandalfg@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'1',
                              'first_name'=>'Frodo',
                              'last_name'=>'Baggins',
                              'email'=>'bagginsf@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'2',
                              'first_name'=>'Kim',
                              'last_name'=>'DotCom',
                              'email'=>'dotcomk@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'2',
                              'first_name'=>'Greyson',
                              'last_name'=>'Smith',
                              'email'=>'smithg@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'2',
                              'first_name'=>'Ricky',
                              'last_name'=>'Bobby',
                              'email'=>'bobbyr@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'3',
                              'first_name'=>'Tim',
                              'last_name'=>'Young',
                              'email'=>'youngt@email.sc.edu'));
        Student::create(array('id'=>'',
                              'pgid'=>'3',
                              'first_name'=>'Kyle',
                              'last_name'=>'Zimmermen',
                              'email'=>'zimmermenk@email.sc.edu'));
    }
 
}