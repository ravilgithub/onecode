<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
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
        $categories = getCategories();
        $posts = getPosts();
        $posts = $this->filterPosts($request, $posts);
        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $current_post_id): View
    {
        $posts = getPosts();
        foreach ($posts as $post) {
            if ($post->id === (int) $current_post_id) {
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
