@extends('layouts.base')

@section('page.title', __('Редактировать пост'))

@section('content')

    <section class="create-post">

        <x-container>

            <x-on-line>

                <x-title class="h2 my-4">{{ __('Редактировать пост') }}</x-title>

                <x-link to="user.posts.show" :params="[$post->id]">
                    {{ __('Назад') }}
                </x-link>

            </x-on-line>

            <x-post.form class="my-form" action="{{ route('user.posts.update', $post->id) }}" :post="$post" :categories="$categories" put />

        </x-container>

    </section>

@endsection
