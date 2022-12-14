<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:250',
            'img' => 'image'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле name является обязательным',
            'name.min' => 'Поле name не должно быть короче 3',
            'name.max' => 'Поле name не должно быть больше 250'
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'status' => filter_var($this->status, FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE)
        ]);
    }
}
