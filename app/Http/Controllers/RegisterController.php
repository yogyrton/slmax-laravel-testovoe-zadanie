<?php

namespace App\Http\Controllers;

use App\Events\NewUser;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::query()
            ->create($data);

        Auth::login($user);

        NewUser::dispatch($user);

        return to_route('main');
    }
}
