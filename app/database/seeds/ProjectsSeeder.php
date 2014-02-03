<?php
  
class ProjectsSeeder extends Seeder {
 
    public function run()
    {
        DB::table('projects')->delete();

        Project::create(array('id'=>'1',
                              'name'=>'Project One',
                              'description'=>'This is the test data for the discription field of Project One.'));
        Project::create(array('id'=>'2',
                              'name'=>'Project Two',
                              'description'=>'This is the test data for the discription field of Project Two.'));
        Project::create(array('id'=>'3',
                              'name'=>'Project Three',
                              'description'=>'This is the test data for the discription field of Project Three.'));
    }
 
}