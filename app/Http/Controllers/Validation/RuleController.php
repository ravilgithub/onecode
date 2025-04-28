<?php

namespace App\Http\Controllers\Validation;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreValidationRulesRequest;

class Rules extends Controller
{
    public function index(): View
    {
        $fields = session('sanitized_form_fields');
        return view('validation.rules.index', ['fields' => $fields]);
    }

    public function create(): View
    {
        return view('validation.rules.create');
    }

    public function store(StoreValidationRulesRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        session(['sanitized_form_fields' => $validated]);
        return redirect()->route('validation.rules.index');
    }
}
