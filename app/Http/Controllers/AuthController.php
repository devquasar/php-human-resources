<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SigninRequest;


class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(SignupRequest $request)
    {
        User::create([
          'email' => $request->input('email'),
          'username' => $request->input('username'),
          'password' => bcrypt($request->input('password')),
        ]);

        return redirect()
                ->route('home')
                ->with('info', 'Вы успешно зарегистрировались! Можно войти на портал.');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(SigninRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Неправильный логин или пароль');
        }
        return redirect()->route('home')->with('info', 'Вы вошли на портал');
    }

    public function getSignout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
