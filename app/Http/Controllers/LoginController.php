<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login.index');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('user.posts.index');
    }

    public function confirm(Request $request, $user): string
    {
        //        dump($request);
        return "Двухфакторная аутентификация пользователя с id: $user";
    }
}
