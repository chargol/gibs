<?php namespace Gibs;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model {

	protected $fillable = ['firstname', 'lastname', 'email', 'phone'];

	/*
		HelpMethos
	 */

	public function fullName()
	{
		return $this->firstname . " " . $this->lastname;
	}
	
	/*
		Attribute Setters
	 */

	public function setEmailAttribute($value)
	{
		return (is_null($value)) ? NULL : $value;
	}

	public function setPhoneAttribute($value)
	{
		return (is_null($value)) ? NULL : $value;
	}
	
}
