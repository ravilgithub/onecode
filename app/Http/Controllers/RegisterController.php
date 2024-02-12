<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('register.index');
    }

    public function store(Request $request): string
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');
        $rules = $request->boolean('rules');

        dump($email, $password, $password_confirmation, $rules);

        return 'Регистрация пользователя.';
    }
}
