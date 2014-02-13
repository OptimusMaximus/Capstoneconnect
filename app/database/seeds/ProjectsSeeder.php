<?php
  
class ProjectsSeeder extends Seeder {
 
    public function run()
    {
        DB::table('projects')->delete();

        Project::create(array('id'=>'1',
                              'name'=>'Middle Earth Interactive',
                              'description'=>'A interactive map of Middle Earth.'));
        Project::create(array('id'=>'2',
                              'name'=>'Mutant Genome Analyzer',
                              'description'=>'Analyses x-men DNA and addes it to the human genome project.'));
        Project::create(array('id'=>'3',
                              'name'=>'Hero Space',
                              'description'=>'Social media app for super heroes.'));
    }
 
}