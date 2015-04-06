<?php

use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;
use Laracasts\TestDummy\Factory as TestDummy;

class AreaResourceTest extends TestCase {

	use DatabaseTransactions;

	 /** @test */
	public function it_displays_all_areas()
	{
	   $area_name = 'Neuwied';
	   TestDummy::create('Gibs\Area', ['name' => $area_name]);

	   $this->visit(route('areas'))
	   		->see($area_name);
	}

	 /** @test */
	public function it_displays_view_for_creating_a_new_area()
	{
	   $this->visit(route('areas'))
	   		->click('Hinzufügen')
	   		->seePageIs(route('area.create'));
	}

	 /** @test */
	public function it_creates_a_new_area()
	{
	   $area = [
			'name'     => 'Feldkirchen',
			'shortcut' => 'fk'
	   ];

	   $this->visit(route('area.create'))
	   		->type($area['name'], 'name')
	   		->type($area['shortcut'], 'shortcut')
	   		->press('Neu anlegen')
	   		->verifyInDatabase('areas', $area);
	}

	/** @test */
	public function it_validates_data_before_saving_a_new_area()
	{
	   // Required Name-Field
	   $this->visit(route('area.create'))
	   		->type('', 'name')
	   		->type('tst', 'shortcut')
	   		->press('Neu anlegen')
	   		->seePageIs(route('area.create'));

	   // Required Shortcut-Field
	   $this->visit(route('area.create'))
	   		->type('Bad Hönningen', 'name')
	   		->type('', 'shortcut')
	   		->press('Neu anlegen')
	   		->seePageIs(route('area.create'));

	   	// Shortcut is shorter than 3 Characters
	   $this->visit(route('area.create'))
	   		->type('Melsbach', 'name')
	   		->type('Melsb', 'shortcut')
	   		->press('Neu anlegen')
	   		->seePageIs(route('area.create'));

	}

}