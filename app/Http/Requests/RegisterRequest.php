<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'password' => 'required|min:3|max:10|confirmed',
            'email' => 'required|email|unique:users',
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'Обязательно для заполнения',
            'name.string' => 'Должно быть строкой',
            'name.min' => 'Минимум 3 символа',
            'name.max' => 'Максимум 100 символов',

            'password.required' => 'Обязательно для заполнения',
            'password.min' => 'Минимум 3 символа',
            'password.max' => 'Максимум 10 символов',
            'password.confirmed' => 'Пароли не совпадают',

            'email.required' => 'Обязательно для заполнения',
            'email.email' => 'Должно быть email',
            'email.unique' => 'Такой email уже есть',
        ];
    }
}
