<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6',
          ];
    }
    public function messages() {
        return [
            'username.required' => 'Поле юзернейм является обязательным',
            'email.required' => 'Поле email является обязательным',
            'password.required' => 'Поле пароль является обязательным'

        ];
    }
}
