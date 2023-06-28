<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users',
            'password' => 'required|min:3|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Обязательно для заполнения',
            'email.email' => 'Должно быть email',
            'email.exists' => 'Такой email не зарегистрирован',

            'password.required' => 'Обязательно для заполнения',
            'password.min' => 'Минимум 3 символа',
            'password.max' => 'Максимум 10 символов',
        ];
    }
}
