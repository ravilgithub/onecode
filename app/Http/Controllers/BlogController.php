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

        return array_fill(0, 4, $post);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = $this->getPosts();
        // compact('posts') == ['posts' => $posts]
        return view('blog.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $current_post_id): View
    {
        $posts = $this->getPosts();
        foreach ($posts as $post) {
            if ($post->id === (int) $current_post_id) {
                // compact('post') == ['post' => $post]
                return view('blog.show', compact('post'));
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
