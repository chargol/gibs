<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AreasTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::create('Gibs\Area', ['name' => 'Neuwied', 'shortcut' => 'nw']);
        TestDummy::create('Gibs\Area', ['name' => 'Feldkirchen', 'shortcut' => 'fk']);
        TestDummy::create('Gibs\Area', ['name' => 'Rheinbrohl', 'shortcut' => 'rh']);
        TestDummy::create('Gibs\Area', ['name' => 'Oberbieber', 'shortcut' => 'ob']);
        TestDummy::create('Gibs\Area', ['name' => 'Nieberbieber', 'shortcut' => 'nd']);
        TestDummy::create('Gibs\Area', ['name' => 'Leutesdorf', 'shortcut' => 'ld']);
        TestDummy::create('Gibs\Area', ['name' => 'Melsbach', 'shortcut' => 'me']);
        TestDummy::create('Gibs\Area', ['name' => 'Rengsdorf', 'shortcut' => 'rg']);
    }

}