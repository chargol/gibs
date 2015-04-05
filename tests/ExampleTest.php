<?php

use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;

class ExampleTest extends IntegrationTest {

	 /** @test */
	public function test()
	{
	   $this->visit('/');
	}

}
