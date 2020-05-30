<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'email',
            'start_work' => 'required'
          ];
    }
    public function messages() {
        return [
            'first_name.required' => 'Поле фамилия является обязательным',
            'second_name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'start_work.required' => 'Поле дата трудоустройства является обязательным'

        ];
    }
}
