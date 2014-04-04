<?php

class ProjectTest extends TestCase {
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
		//testing that admin user can retrieve the form for adding a user
		Route::enableFilters();
		ProjectTest::adminLogin();
		$response = $this->call('GET', '/project');
		
		$this->assertResponseOk();

		Sentry::logout();
		
		//tesing that a normal user can't retrieve a form for adding a user
		//and that a page displays a message as to why they can't
		ProjectTest::userLogin();
		$crawler = $this->client->request('GET', '/project');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testStore() 
	{
		ProjectTest::adminLogin();
		$post_data = array(
			'project_name' => 'Project Name',
			'description' => 'blah blah blah'
			);
		$this->call('POST', '/project', $post_data);

		$this->assertRedirectedToRoute('admin_users');
		Sentry::logout();
	}

	public function testEdit()
	{
		//testing that admin user can retrieve the form for editing a user
		Route::enableFilters();
		ProjectTest::adminLogin();
		$bob = Project::find(1);
		$response = $this->call('GET', '/project/1/edit');
		
		$this->assertResponseOk();

		Sentry::logout();
		
		// tesing that a normal user can't retrieve a form for editing a user
		// and that a page displays a message as to why they can't
		ProjectTest::userLogin();
		$crawler = $this->client->request('GET', '/project/1/edit');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testUpdate()
	{
		ProjectTest::adminLogin();
		$project = Project::all()->last();
		$post_data = array(
			'project_name' => $project->name,
			'description' => $project->description);
		$this->call('PATCH', '/project/1', $post_data);

		$this->assertRedirectedToRoute('admin_users');
		Sentry::logout();
	}

	public function testDestory() 
	{
		ProjectTest::adminLogin();
		$this->call('DELETE', '/project/1');
		$this->assertRedirectedToRoute('admin_users');
		Sentry::logout();
	}
	
}