<?php

class EvaluationTest extends TestCase {
	/*test helpers*/
	private function adminLogin() {
		$credentials = array(
            'email' => 'admin@sc.edu',
            'password' => 'admin'
            );
		Sentry::authenticate($credentials, false);
	}

	private function userLogin() {
		$credentials = array(
            'email' => 'stark@sc.edu',
            'password' => 'ironman'
            );
		Sentry::authenticate($credentials, false);
	}

	public function testCreate()
	{
		//testing that admin user can retrieve the form for creating an evaluation
		Route::enableFilters();
		EvaluationTest::adminLogin();
		$response = $this->call('GET', '/evaluation/create');
		
		$this->assertResponseOk();

		Sentry::logout();
		
		//tesing that a normal user can't retrieve a form to create 
		//an evaluation and that a page displays a message as to why they can't
		EvaluationTest::userLogin();
		$crawler = $this->client->request('GET', '/evaluation/create');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testStore() 
	{
		$post_data = array(
			'q1' => 'stuff',
			'q2' => 'stuff',
			'q3' => 'stuff',
			'q4' => 'stuff',
			'q5' => 'stuff',
			'q6' => 'stuff',
			'q7' => 'stuff',
			'q8' => 'stuff',
			'q9' => 'stuff',
			'q10' => 'stuff'
			);
		$this->call('POST', '/evaluation', $post_data);
		$this->assertRedirectedToRoute('admin_evals');
	}

	public function testEdit()
	{
		$eval = Evaluation::all()->first();
		//testing that admin user can retrieve the form for editing an evaluation
		Route::enableFilters();
		EvaluationTest::adminLogin();
		$response = $this->call('GET', '/evaluation/'.$eval->id.'/edit');
		
		$this->assertResponseOk();

		Sentry::logout();
		
		// tesing that a normal user can't retrieve a form for editing an evaluation
		// and that a page displays a message as to why they can't
		EvaluationTest::userLogin();
		$crawler = $this->client->request('GET', '/evaluation/'.$eval->id.'/edit');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testUpdate()
	{
		EvaluationTest::adminLogin();
		$eval = Evaluation::all()->first();
		$post_data = array(
			'q1' => $eval->q1,
			'q2' => $eval->q2,
			'q3' => $eval->q3,
			'q4' => $eval->q4,
			'q5' => $eval->q5,
			'q6' => $eval->q6,
			'q7' => $eval->q7,
			'q8' => $eval->q8,
			'q9' => $eval->q9,
			'q10' => $eval->q10,
			'close_at' => $eval->close_at,
			);
		$this->call('PUT', '/evaluation/'.$eval->id, $post_data);

		$this->assertRedirectedToRoute('admin_evals');
		Sentry::logout();
	}

	public function testDestory() 
	{
		$eval = Evaluation::all()->first();
		EvaluationTest::adminLogin();
		$this->call('DELETE', '/evaluation/'.$eval->id);
		$this->assertRedirectedToRoute('admin_evals');
		Sentry::logout();
	}
	

}