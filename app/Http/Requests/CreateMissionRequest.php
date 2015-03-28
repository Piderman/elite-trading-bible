<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateMissionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		//todo: add users so we can track cargo
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
			'destination_system' => 'required',
			'destination_station' => 'required',
			'commodity' => 'required',
			'qty' => 'required | integer',
		];
	}

}
