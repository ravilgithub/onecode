<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        return 'Все записи.';
    }


    /**
     * Display the specified resource.
     */
    public function show(string $post): string
    {
        return "Записи категории с id: $post";
    }


    /**
     * Update the specified resource in storage.
     */
    public function like(string $post): string
    {
        return 'Увеличение лайков поста c id: ' . $post;
    }
}
