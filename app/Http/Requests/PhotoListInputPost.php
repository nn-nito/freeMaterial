<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Redirector;

class PhotoListInputPost extends FormRequest
{
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
			'tag' => ['required', 'max:20'],
		];
	}



	/**
	 * @return array
	 */
	public function messages()
	{
		return [
			'tag.max' => '検索文字列が最大値を超えています。',
		];
	}
}
