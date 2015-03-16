<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class FieldsTableSeeder extends Seeder {

    public function run()
    {
        $areas = Gibs\Area::all();

        foreach ($areas as $area) {
        	for ($i=1; $i < rand(4,20); $i++) { 
        		TestDummy::create('Gibs\Field', [
        			'area_id' => $area->id,
        			'number' => $i,
        		]);
        	}

        }
    }

}