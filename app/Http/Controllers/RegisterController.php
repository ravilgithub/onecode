<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:50'],
            'password' => ['required', 'string', 'confirmed', 'min:7', 'max:50'],
            'rules' => ['accepted'],
        ]);

        return redirect()->route('user.posts.index');
    }
}
