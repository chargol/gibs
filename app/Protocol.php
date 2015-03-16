<?php namespace Gibs;

use Illuminate\Database\Eloquent\Model;

class Protocol extends Model {

	protected $fillable = ['publisher_id', 'worked_at'];

	/**
	 * Raltionships
	 */
	
	public function publisher()
	{
		return $this->belongsTo('Gibs\Publisher');
	}
	

	/**
	 * Setting columns to date type (carbon)
	 * @return array
	 */
	public function getDates()
	{
		return ['worked_at', 'created_at', 'updated_at'];
	}
	

}
