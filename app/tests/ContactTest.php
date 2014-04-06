<?php

class ContactTest extends TestCase {
	/*test helpers*/
	private function start($type = 'user') {
		Route::enableFilters();
		if($type == 'user'){
			$credentials = array(
	            'email' => 'stark@sc.edu',
	            'password' => 'ironman'
	            );
		}elseif($type == 'admin'){
			$credentials = array(
	            'email' => 'admin@sc.edu',
	            'password' => 'admin'
	            );
		}else{
			echo "you need to enter admin or user for ContactTest::start()";
		}
		Sentry::authenticate($credentials, false);
		Contact::create(array(
				'contact_email' => 'admin@sc.edu'
			));
	}

	private function end() {
		Sentry::logout();
	}

	public function testGetContactUsForm()
	{
		ContactTest::start();
		// Mail::pretend();
		$postdata = array(
			'first_name' => 'John',
			'last_name' => 'Smith',
			'email' => 'johnsmith@sc.edu',
			'phone_number' => '8035555555',
			'message' => 'blah'
			);
		$this->call('POST', 'contact_request', $postdata);
		$this->assertResponseOk();

		//invalid first_name
		$postdata['first_name']=9;
		$response = $this->call('POST', 'contact_request', $postdata);
		$this->assertFalse($response->isOk());
		$postdata['first_name']="John";

		//invalid last_name
		$postdata['last_name']=9;
		$response = $this->call('POST', 'contact_request', $postdata);
		$this->assertFalse($response->isOk());
		$postdata['last_name']="Smith";

		//invalid email
		$postdata['email'] = 'johnsmithscedu';
		$response = $this->call('POST', 'contact_request', $postdata);
		$this->assertFalse($response->isOk());
		$this->assertRedirectedTo('/contact');
		$postdata['email'] = 'johnsmith@sc.edu';

		//invalid phone number
		$postdata['phone_number'] = 'myphonenumber';
		$response = $this->call('POST', 'contact_request', $postdata);
		$this->assertFalse($response->isOk());
		$this->assertRedirectedTo('/contact');
		$postdata['phone_number'] = '80355555555';

		//invalid message
		$postdata['message'] = '';
		$response = $this->call('POST', 'contact_request', $postdata);
		$this->assertRedirectedTo('/contact');
		$this->assertFalse($response->isOk());
		ContactTest::end();
	}

	public function testCreate()
	{
		ContactTest::start('admin');
		$this->call('GET', '/contact_create_email');
		$this->assertResponseOk();
		ContactTest::end();

		ContactTest::start();
		$crawler = $this->client->request('GET', '/contact_create_email');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);
		ContactTest::end();
				
	}

	public function testUpdate()
	{
		$postdata = array('email' => 'johnsmith@sc.edu');
		ContactTest::start();
		$crawler = $this->client->request('POST', '/contact_create_email', $postdata);
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);	
		ContactTest::end();

		//valid input
		ContactTest::start('admin');
		$this->call('POST', '/contact_create_email', $postdata);
		$this->assertRedirectedTo('contact_create_email');

		//invalid input
		$postdata['email'] = "johnsmithscedu";
		$response = $this->call('POST', '/contact_create_email', $postdata);
		$this->assertFalse($response->isOk());
		$this->assertRedirectedTo('contact_create_email');
	}
}