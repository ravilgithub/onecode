@extends('layouts.base')

@section('page.title', __('Создать пост'))

@section('content')

    <section class="create-post">

        <x-container>

            <x-on-line>

                <x-title class="h2 my-4">{{ __('Создать пост') }}</x-title>

                <x-link to="user.posts.index">
                    {{ __('Назад') }}
                </x-link>

            </x-on-line>

            <x-post.form class="my-form" action="{{ route('user.posts.store') }}" :categories="$categories" />

        </x-container>

    </section>

@endsection
