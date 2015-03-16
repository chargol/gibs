<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PublishersTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(30)->create('Gibs\Publisher');
    }

}