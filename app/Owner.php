<?php namespace Gibs;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model {

	protected $fillable = ['publisher_id', 'field_id', 'issue_at'];

	
	/**
	 * Relationship to Publisher
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
		return ['issue_at','return_at','created_at', 'updated_at'];
	}
	

}
