<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
		    // validation rules
		    'name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
		    'email' => 'required|email',
		    'phone' => 'required|regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
		    'message' => 'required',
	    ];
    }

	/**
	 * Get the validation messages that apply to the request.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			// validation messages
			'name.required' => 'Your name is required!',
			'name.regex' => 'Invalid character(s) found in your name!',
			'email.required' => 'Email address is required!',
			'email.email' => 'Invalid email format (example@email.com)!',
			'phone.required' => 'Phone number is required!',
			'phone.regex' => 'Invalid phone number format (XXX-XXX-XXXX)',
			'message.required' => 'A message is required!',
		];
	}
}
