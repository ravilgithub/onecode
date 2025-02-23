<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreUpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Записи пользователя
     *
     * @return  array
     */
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
    public function index(Request $request): View
    {
        $posts = $this->getPosts();
        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdatePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // dd($validated);

        $post = $this->getPosts()[0];
        alert('Сохранено!');
        return redirect()->route('user.posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $current_post_id): View
    {
        $posts = $this->getPosts();
        foreach ($posts as $post) {
            if ($post->id === (int) $current_post_id) {
                return view('user.posts.show', compact('post'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $current_post_id): View
    {
        $posts = $this->getPosts();
        foreach ($posts as $post) {
            if ($post->id === (int) $current_post_id) {
                return view('user.posts.edit', compact('post'));
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdatePostRequest $request, string $id): RedirectResponse
    {
        $validated = $request->validated();

        // dd($validated);

        alert('Обновлено!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        return redirect()->route('user.posts.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function like(string $id): string
    {
        return 'Увеличение лайков поста c id: ' . $id;
    }
}
