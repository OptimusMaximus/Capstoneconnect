<?php

class ExportCSVTest extends TestCase {
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
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testExport()
	{
		Route::enableFilters();
		ExportCSVTest::adminLogin();
		$crawler = $this->client->request('GET', '/download_csv');
		$this->assertTrue($this->client->getResponse()->isOk());
		Sentry::logout();

		ExportCSVTest::userLogin();
		$crawler = $this->client->request('GET', '/download_csv');
		$message = $crawler->filter('body')->text();

		$this->assertFalse($this->client->getResponse()->isOk());
		$this->assertEquals("Access Forbidden!  You do not have permissions to access this page!", $message);
		Sentry::logout();
	}
}