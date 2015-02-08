<?php namespace Gibs;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

	protected $fillable = ['name', 'shortcut'];

	/**
	 * Mutator to make value lowercase
	 * @param string $value shortcut for Area
	 */
	public function setShortcutAttribute($value)
	{
		$this->attributes['shortcut'] = strtolower($value);
	}

}
