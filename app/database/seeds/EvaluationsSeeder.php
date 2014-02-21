<?php
class EvaluationsSeeder extends Seeder {

	public function run()
	{
        DB::table('evaluations')->delete();

	

	Evaluation::create(array(
			'q1' => 'What is your name?',
		    'q2' => 'What is your quest?',
		    'q3' => 'What is the favorite color?',
		    'q4' => 'What is the capital of Assyria?',
		    'q5' => 'What is the air-speed velocity of an unladen swallow? ',
		    'q6' => 'An African or European swallow?',
		    'q7' => 'How do know so much about swallows?',
		    'q8' => 'What are the questions from?',
		    'q9' => 'Did you enjoy thier source?',
		    'q10' => 'Why are there ten questions?'
		));
	Evaluation::create(array(
			'q1' => 'Did your member meet promptly?',
		    'q2' => 'Did they do the tasks they were given?',
		    'q3' => 'Did they do an equal share of the work?',
		    'q4' => 'Was there work an acceptable quality?',
		    'q5' => 'How often did they communicate?',
		    'q6' => 'How helpful were they in brainstorming?',
		    'q7' => 'Did they have a clear understanding of the techonology used?',
		    'q8' => 'How well did they keep to standard practices?',
		    'q9' => 'Did your group work well together?',
		    'q10' => 'Was lecture benefical?'
		));
	}
}

?>