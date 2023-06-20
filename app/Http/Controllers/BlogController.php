<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function getPosts(): array
    {
        $post = (object) [
            'id'      => 1,
            'title'   => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem, ipsum dolor sit amet <a href="https://yandex.ru">Yandex</a> consectetur adipisicing elit. Quibusdam, accusamus.'
        ];

        return array_fill(0, 5, $post);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = $this->getPosts();
        return view('blog.index', compact('posts'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $post): View
    {
        $posts = $this->getPosts();
        foreach ($posts as $item) {
            if ($item->id === (int) $post) {
                return view('blog.show', ['post' => $item]);
            }
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function like(string $post): string
    {
        return 'Увеличение лайков поста c id: ' . $post;
    }
}
