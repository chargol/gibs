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
	public function it_display_view_for_creating_a_new_field()
	{
	   $area_data = TestDummy::create('Gibs\Area');

	   $this->visit(route('area.fields', $area_data['id']))
	   		->click('Hinzufügen')
	   		->seePageIs(route('field.create'));
	}
	
}