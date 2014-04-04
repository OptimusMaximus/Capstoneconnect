<?php

class AnswerTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testStore()
	{	
		$user1 = User::all()->last();
		$user2 = User::where('project_id','=',$user1->project_id)
					   ->where('id',"!=",$user1->id)->first();
		$eval = Evaluation::all()->first();
		$post_data = array(
			'eid' => $eval->id,
			'answered_by' => $user1->id,
			'answered_about' => $user2->id,
			'ans1' => "2",
			'ans2' => "2",
			'ans3' => "2",
			'ans4' => "2",
			'ans5' => "2",
			'ans6' => "2",
			'ans7' => "2",
			'ans8' => "2",
			'ans9' => "2",
			'ans10' => "2",
			'comment'=>"blah");

		$this->call('POST', '/answer', $post_data);
		$this->assertRedirectedToRoute('evaluation.show', $eval->id);

	}

}