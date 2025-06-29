<?php

namespace App\Http\Controllers\Validation;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreValidationRulesRequest;

class RuleController extends Controller
{
    public function index(): View
    {
        $fields = session('sanitized_form_fields');
        return view('validation.rules.index', compact('fields'));
    }

    public function create(): View
    {
        $categories = [
            'apple'  => __('Apple'),
            'cherry' => __('Cherry'),
            'peach'  => __('Peach'),
            'melon'  => __('Melon'),
        ];

        return view('validation.rules.create', compact('categories'));
    }

    public function store(StoreValidationRulesRequest $request): RedirectResponse // Bool // для проверки файла
    {
        $validated = $request->validated();
        // dd($validated);

        // Для проверки файла раскомментировать.
        // dump($validated);
        // return false;

        // Для проверки файла закомментировать всё что ниже.

        session(['sanitized_form_fields' => $validated]);
        return redirect()->route('validation.rules.index');
    }
}
