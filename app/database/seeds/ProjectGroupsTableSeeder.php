<?php
  
class ProjectGroupsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('project_groups')->delete();

        ProjectGroup::create(array('id'=>'1',
                              'name'=>'Project One',
                              'description'=>'This is the test data for the discription field of Project One.'));
        ProjectGroup::create(array('id'=>'2',
                              'name'=>'Project Two',
                              'description'=>'This is the test data for the discription field of Project Two.'));
        ProjectGroup::create(array('id'=>'3',
                              'name'=>'Project Three',
                              'description'=>'This is the test data for the discription field of Project Three.'));
    }
 
}