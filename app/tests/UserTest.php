<?php

class UserTest extends TestCase {
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
	/**
	 * Test that a new project form
	 * is successfully called.
	 * @return void
	 */

	public function testProjectCreate() 
	{
		//testing that admin user can retrieve the form for adding a project
		Route::enableFilters();
		UserTest::adminLogin();
		$response = $this->call('GET', '/project/1/user/new');
		
		$this->assertResponseOk();

		Sentry::logout();
		
		//tesing that a normal user can't retrieve a form for adding a project
		//and that a page displays a message as to why they can't
		UserTest::userLogin();
		$crawler = $this->client->request('GET', '/project/1/user/new');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testStore() 
	{
		UserTest::adminLogin();
		$post_data = array(
			'first_name' => 'John',
			'last_name' => 'Doe',
			'project_id' => '1',
			'email' => 'JohnDoe@sc.edu',
			"group" => 'U');
		$this->call('POST', '/user', $post_data);

		$this->assertRedirectedToRoute('admin_users');
		Sentry::logout();
	}

	/**
	 * Test edit
	 *
	 *
	 */
	public function testEdit()
	{
		//testing that admin user can retrieve the form for editing a project
		Route::enableFilters();
		UserTest::adminLogin();
		$bob = User::find(1);
		$response = $this->call('GET', '/user/1/edit');
		
		$this->assertResponseOk();

		Sentry::logout();
		
		// tesing that a normal user can't retrieve a form for editing a project
		// and that a page displays a message as to why they can't
		UserTest::userLogin();
		$crawler = $this->client->request('GET', '/user/1/edit');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testUpdate()
	{
		UserTest::adminLogin();
		$user = User::find(1);
		$post_data = array(
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'email' => $user->email,
			'group' => 'U');
		$this->call('PUT', '/user/1', $post_data);

		$this->assertRedirectedToRoute('admin_users');
		Sentry::logout();
	}

	public function testDestory() 
	{
		UserTest::adminLogin();
		$this->call('DELETE', '/user/1');
		$this->assertRedirectedToRoute('admin_users');
		Sentry::logout();
	}
	

}