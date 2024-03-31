<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('register.index');
    }

    public function store(Request $request): RedirectResponse
    {
        if ($invalid = true) {
            return back()->withInput();
        }

        return redirect()->route('user.posts.index');
    }
}
