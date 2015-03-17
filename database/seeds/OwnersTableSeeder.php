<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;

class OwnersTableSeeder extends Seeder {

    public function run()
    {   
        $faker = Faker\Factory::create();

        $fields = Gibs\Field::all();

        foreach ($fields as $field) {
        	
        	// Startjahr vor 9-10 Jahren (3285-3650 Tage) setzen
        	$issue_date = Carbon::now()->subDays(rand(3285, 3650));
        	$today = Carbon::now();

        	$generate = true;
        	
        	while ($generate) {
        		$return_date = $issue_date->copy();
        		// Zwischen 4-24 Monate Besitzzeitraum (120-720 Tage)
        		$return_date->addDays(rand(120,720));

        		if ($return_date->gte($today)) {
        			$field_available = (rand(0,1) == 1) ? true : false;

        			if ($field_available) {
        				$return_date = $issue_date->copy();
        				$diffDays = $today->diffInDays($issue_date);
        				$return_date->addDays(rand(0,$diffDays));
        			} else {
        				$return_date = NULL;
        			}

        			$generate = false;
        		}

                $publisher_id = rand(1,30);

        		TestDummy::create('Gibs\Owner', [
        			'field_id' => $field->id,
                    'publisher_id' => $publisher_id,
        			'issue_at' => $issue_date,
        			'return_at' => $return_date
        		]);

                // Für jede Ausgabe, kommen evt. 1-3 Bearbeitungen in Frage
                for ($i=1; $i <= rand(1,3); $i++) { 
                    $start_date = $issue_date;
                    $end_date = (is_null($return_date)) ? Carbon::now() : $return_date;
                    TestDummy::create('Gibs\Protocol', [
                        'field_id' => $field->id,
                        'publisher_id' => $publisher_id,
                        'worked_at' => $faker->dateTimeBetween($start_date->toDateTimeString(), $end_date->toDateTimeString())
                    ]);
                }
        		
        		if (!is_null($return_date)) {
        			$issue_date = $return_date->copy();
        			// Ausgabepause zwischen 1-12 Monate (30-365 Tage)
        			$issue_date->addDays(rand(30,365));

        			$generate = ($issue_date->gte($today)) ? false : true;
        		}
        		
        	}


        }
    }

}