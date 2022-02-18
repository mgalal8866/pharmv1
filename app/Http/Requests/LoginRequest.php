<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    // public $validator = null;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=>'required|email|exists:brandaccounts,email',
            'password' => 'required|min:6'
        ];

    }
    public function messages()
    {
        return [
            'email.required' => 'البريد الالكترونى مطلوب',
            'email.email' => 'البريد الالكترونى غير صالح',
            'password.required' =>'الرقم مطلوب',

        ];

    }



}
