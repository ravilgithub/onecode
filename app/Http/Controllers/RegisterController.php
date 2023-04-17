<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(): string
    {
        return 'Форма регистрации пользователя.';
    }

    public function store(): string
    {
        return 'Регистрация пользователя.';
    }
}
