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
		'users',
		'password_resets',
		'protocols',
		'publishers',
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
		$this->call('PublishersTableSeeder');
		$this->call('FieldsTableSeeder');
		$this->call('OwnersTableSeeder');
		// $this->call('ProtocolsTableSeeder');
	}

	private function cleanUpDatabase() {
		foreach ($this->tables as $table) {
			DB::table($table)->truncate();
		}
	}

}
