<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContact extends FormRequest
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
            'company'  => 'nullable|string|max:255',
            'name'     => 'required|string|max:255',
            'function' => 'nullable|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|string|max:255',
            'mobile'   => 'required|string|max:255',
            'message'  => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'    => 'Please fill out your name !',
            'email.required'   => 'Please fill out your email !',
            'phone.required'   => 'Please fill out your phone number !',
            'mobile.required'  => 'Please fill out your mobile number !',
            'message.required' => 'Please fill out your message !',
        ];
    }
}
