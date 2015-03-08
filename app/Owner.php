<?php namespace Gibs;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model {

	protected $fillable = ['publisher_id', 'field_id', 'issue_at'];

	public function getDates()
	{
		return ['issue_at','return_at','created_at', 'updated_at'];
	}
	

}
