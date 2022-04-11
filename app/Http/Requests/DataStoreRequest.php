<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DataStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:120'],
            'weight' => ['nullable', 'integer'],
            'color' => ['required', Rule::in(['Красный', 'Зеленый', 'Синий'])]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Название" должно быть заполнено!',
            'name.min' => 'Поле "Название" должно содержать от 3-х символов!',
            'name.max' => 'Поле "Название" должно содержать до 120-и символов!',
            'weight.integer' => 'Поле "Вес" должно быть числом!',
            'color.required' => 'Поле "Цвет" должно быть заполнено!'
        ];
    }
}
