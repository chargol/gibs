<?php 

$factory('Gibs\Area', [
	'name' => $faker->unique()->city,
	'shortcut' => $faker->unique()->word,
]);

$factory('Gibs\Field', [
	'area_id' => 'factory:Gibs\Area',
	'number'  => 0,
	'description' => $faker->streetName
]);

$factory('Gibs\Publisher', [
	'firstname' => $faker->firstname,
	'lastname' => $faker->lastname,
	'email'	=> $faker->unique()->email,
	'phone' => $faker->phoneNumber,
]);

$factory('Gibs\Owner', [
	'field_id' => 'factory:Gibs\Field',
	'publisher_id' => 'factory:Gibs\Publisher',
	'issue_at'	=> Carbon\Carbon::now(),
	'return_at'	=> Carbon\Carbon::now()
]);