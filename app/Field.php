<?php namespace Gibs;

use Illuminate\Database\Eloquent\Model;

class Field extends Model {

	protected $fillable = ['area_id', 'number', 'description'];

	/**
	 * Relationship to Gibs\Area
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function area()
	{
		return $this->belongsTo('Gibs\Area');
	}

	/**
	 * Relationship to Gibs\Owner
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function ownings()
	{
		return $this->hasMany('Gibs\Owner');
	}
	

}
