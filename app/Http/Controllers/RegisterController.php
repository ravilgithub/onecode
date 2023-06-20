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

    public function store(): string
    {
        return 'Регистрация пользователя.';
    }
}
