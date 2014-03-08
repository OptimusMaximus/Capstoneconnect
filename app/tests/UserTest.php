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
	 * Test that a new user form with pid
	 * filled is successfully called.
	 * @return void
	 */

	public function testProjectCreate() 
	{
		//testing that admin user can retrieve the form for adding a user
		Route::enableFilters();
		UserTest::adminLogin();
		$response = $this->call('GET', '/project/{token}/user/new', array('pid' => 1));
		
		$this->assertResponseOk();

		Sentry::logout();
		
		//tesing that a normal user can't retrieve a form for adding a user
		//and that a page displays a message as to why they can't
		UserTest::userLogin();
		$crawler = $this->client->request('GET', '/project/{token}/user/new', array('pid' => 1));
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);

		Sentry::logout();
	}

	public function testStore() 
	{
		UserTest::adminLogin();
		Input::replace($input = [
			'first_name' => 'John',
			'last_name' => 'Doe',
			'project_id' => '1',
			'email' => 'JohnDoe@sc.edu',
			'group' => 'U']);
		$this->call('POST', '/user');

		$this->assertRedirectedToRoute('admin_users');
	}

	/**
	*
	*
	* @return void
	*/

	

}