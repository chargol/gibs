<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProtocolsTableSeeder extends Seeder {

    public function run()
    {
        for ($i=1; $i <= 100; $i++) { 
        	TestDummy::create('Gibs\Protocol', ['publisher_id' => rand(1,31)]);
        }
    }

}