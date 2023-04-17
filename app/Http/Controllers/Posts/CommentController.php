<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $post)
    {
        return "Все коментарии записи c id: $post";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $post)
    {
        return "Форма добавления коментария к записи с id: $post";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $post)
    {
        return "Создание коментария к записи с id: $post";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post, string $comment)
    {
        return "Коментарий c id: $comment записи с id: $post";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post, string $comment)
    {
        return "Форма изменения коментария c id: $comment, к записи с id: $post";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post, string $comment)
    {
        return "Изменить коментарий c id: $comment, к записи с id: $post";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
