<?php namespace Gibs\Http\Requests;

use Gibs\Http\Requests\Request;

class AreaCreateRequest extends Request {

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
			'name' => 'required|unique:areas|string|min:4',
			'shortcut' => 'required|unique:areas|alpha|max:3',
		];
	}

}
