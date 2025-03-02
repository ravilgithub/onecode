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
            'content' => 'Lorem, ipsum dolor sit amet <a href="https://yandex.ru">Yandex</a> consectetur adipisicing elit. Quibusdam, accusamus.',
            'category' => 1,
        ];

        return array_fill(0, 4, $post);
    }

    /**
     * Фильтрация записей блога
     *
     * @param   Request  $request  параметры запроса
     * @param   array    $posts    записи
     *
     * @return  array              записи
     */
    public function filterPosts(Request $request, array $posts): array
    {
        $search = strtolower($request->input('search'));
        $search_cat_id = (int) $request->input('category');

        return array_filter(
            $posts,
            function(object $post) use($search, $search_cat_id): bool
            {
                $title = strtolower($post->title);
                $content = strtolower($post->content);
                $post_cat_id = $post->category;

                if (
                    $search_cat_id &&
                    $post_cat_id !== $search_cat_id
                ) {
                    return false;
                }

                if (
                    $search &&
                    !str_contains($title, $search) &&
                    !str_contains($content, $search)
                ) {
                    return false;
                }

                return true;
            });
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $categories = [
            __('Все категории'),
            __('Первая категория'),
            __('Вторая категория'),
            __('Третья категория'),
        ];
        $posts = $this->getPosts();
        $posts = $this->filterPosts($request, $posts);

        // compact('posts') == ['posts' => $posts]
        return view('blog.index', compact('posts', 'categories'));
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
