<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'message' => 'required|string|min:1|max:100',
            'chat_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [

            'message.required' => 'Обязательно для заполнения',
            'message.string' => 'Должно быть строкой',
            'message.min' => 'Минимум 1 символ',
            'message.max' => 'Максимум 100 символов',

        ];
    }
}
