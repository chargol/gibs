<?php namespace Gibs\Http\Requests;

use Gibs\Http\Requests\Request;

class FieldCreateRequest extends Request {

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
			'area_id'     => 'required|numeric',
			'description' => 'required|string'
		];
	}

}
