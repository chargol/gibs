<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Tables to truncate
	 * @var array
	 */
	protected $tables = [
		'areas',
		'fields',
		'owners',
		'publishers',
		'users',
		'password_resets'
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->cleanUpDatabase();

		$this->call('AreasTableSeeder');
		$this->call('FieldsTableSeeder');
		$this->call('PublishersTableSeeder');
		$this->call('OwnersTableSeeder');
	}

	private function cleanUpDatabase() {
		foreach ($this->tables as $table) {
			DB::table($table)->truncate();
		}
	}

}
