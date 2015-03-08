<?php namespace Gibs\Http\Requests;

use Gibs\Http\Requests\Request;

class PublisherCreateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'firstname' => 'required|string',
			'lastname'  => 'required|string',
			'email'     => 'email|unique:publishers,email,NULL',
			'phone'     => 'string'
		];
	}

}
