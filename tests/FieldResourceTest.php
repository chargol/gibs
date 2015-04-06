<?php

use Laracasts\Integrated\Services\Laravel\DatabaseTransactions;
use Laracasts\TestDummy\Factory as TestDummy;

class FieldResourceTest extends TestCase {
	
	use DatabaseTransactions;

	/** @test */
	public function it_displays_all_fields_of_an_area()
	{
		$area_data = TestDummy::create('Gibs\Area');
		$field_data = TestDummy::create('Gibs\Field', [
			'area_id' => $area_data['id'],
			'number'  => 1,
		]);

	   	$this->visit(route('areas'))
	   		 ->click($area_data['name'])
	   		 ->seePageIs(route('area.fields', $area_data['id']))
	   		 ->see($area_data['shortcut'] .$field_data['number']);
	}

	 /** @test */
	public function it_displays_view_for_creating_a_new_field()
	{
	   $area_data = TestDummy::create('Gibs\Area');

	   $this->visit(route('area.fields', $area_data['id']))
	   		->click('Hinzufügen')
	   		->seePageIs(route('field.create', $area_data['id']))
	   		->see($area_data['name']);
	}

	 /** @test */
	public function it_creates_the_first_field_belonging_to_an_area()
	{
	   $area_data = TestDummy::create('Gibs\Area');
	   $field_data = [
			'area_id'     => $area_data['id'],
			'number'      => 1, // Should be 1, because there aren't other fields for the given area.
			'description' => 'Rheinblick'
	   ];

	   $this->visit(route('field.create', $area_data['id']))
	   		->type($field_data['description'], 'description')
	   		->press('Neu anlegen')
	   		->verifyInDatabase('fields', $field_data)
	   		->seePageIs(route('area.fields', $area_data['id']));
	}

	/** @test */
	public function it_creates_a_further_field_belonging_to_an_area()
	{
	   $area_data = TestDummy::create('Gibs\Area');
	   TestDummy::create('Gibs\Field', ['area_id' => $area_data['id'], 'number' => 1]);
	   TestDummy::create('Gibs\Field', ['area_id' => $area_data['id'], 'number' => 2]);

	   $field_data = [
			'area_id'     => $area_data['id'],
			'number'      => 3, // Should be 3, because there are already two fields belonging to the same area.
			'description' => 'Waldtief'
	   ];

	   $this->visit(route('field.create', $area_data['id']))
	   		->type($field_data['description'], 'description')
	   		->press('Neu anlegen')
	   		->verifyInDatabase('fields', $field_data)
	   		->seePageIs(route('area.fields', $area_data['id']));
	}

	/** @test */
	public function it_validates_data_before_saving_a_new_field()
	{	
		$area_data = TestDummy::create('Gibs\Area');

	   // Required Description-Field
	   $this->visit(route('field.create', $area_data['id']))
	   		->type('', 'description')
	   		->press('Neu anlegen')
	   		->seePageIs(route('field.create', $area_data['id']));
	}
	
}