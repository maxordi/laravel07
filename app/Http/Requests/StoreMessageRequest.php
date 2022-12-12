<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'theme' => 'required',
            'text'=> 'required'
        ];
    }
    public function messages()
    {
        return [
            'user_id' => 'Поле user является обязательным',
            'theme' => 'Поле theme является обязательным',
            'text' => 'Поле name text является обязательным'
        ];
    }
}
