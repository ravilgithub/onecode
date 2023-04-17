<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): string
    {
        return 'Страница поста';
        // return response()->json($request->input('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): string
    {
        return 'Страница формы создания поста';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return 'Создание поста';
        // return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): string
    {
        return 'Страница поста c id: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        return 'Страница формы изменения поста c id: ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return 'Изменение поста c id: ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        return 'Удаление поста c id: ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function like(string $id): string
    {
        return 'Увеличение лайков поста c id: ' . $id;
    }
}
