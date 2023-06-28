<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('register.login');
    }

    public function login(LoginRequest $request)
    {
        $user = $request->validated();
        $remember = $request->remember;

        if (Auth::attempt($user, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('main'));
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Неверный email или пароль',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended(route('main'));
    }
}
