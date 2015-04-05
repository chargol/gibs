<?php

class ExampleTest extends TestCase {

	 /** @test */
	public function it_displays_a_homepage()
	{
	   $this->visit('/');
	}

}