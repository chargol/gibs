<?php namespace Gibs\Http\Requests;

use Gibs\Http\Requests\Request;

class ProtocolCreateRequest extends Request {

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
			'field_id' => 'required|numeric',
			'publisher_id' => 'required|numeric',
		];
	}

}
